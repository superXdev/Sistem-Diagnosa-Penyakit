<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SettingRequest;
use Carbon\Carbon;

class DashboardController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:dashboard', ['only' => ['index']]);
         $this->middleware('permission:logs-list', ['only' => ['activity_logs']]);
         $this->middleware('permission:logs-delete', ['only' => ['delete_logs']]);
    }

    /**
    * Show dashboard
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $logs = Activity::where('causer_id', auth()->id())->latest()->paginate(5);
        $riwayat = Riwayat::select(
            DB::raw("COUNT(id) as total"),
            DB::raw("DATE_FORMAT(created_at, '%d %M') as days")
        )
        ->where('created_at', '>=', Carbon::now()->subDays(7))
        ->groupBy('days')->orderBy('created_at', 'asc')->get();

        return view('admin.dashboard', compact('logs', 'riwayat'));
    }

    /**
    * Show activity logs
    *
    * @return \Illuminate\Http\Response
    */
    public function activity_logs()
    {
        $logs = Activity::where('causer_id', auth()->id())->latest()->paginate(10);

        return view('admin.logs', compact('logs'));
    }

    public function delete_logs()
    {
        $logs = Activity::where('created_at', '<=', Carbon::now()->subWeeks())->delete();

        return back()->with('success', $logs.' Logs successfully deleted!');
    }

	/**
	* Store settings into database
	*
	* @param $request
    * @return \Illuminate\Http\Response
	*/
    public function settings_store(SettingRequest $request)
    {
    	// when you upload a logo image
    	if($request->file('logo')) {
	    	$filename = $request->file('logo')->getClientOriginalName();
	    	$filePath = $request->file('logo')->storeAs('uploads', $filename, 'public');
	    	setting()->set('logo', $filePath);
    	}

    	setting()->set('site_name', $request->site_name);
    	setting()->set('keyword', $request->keyword);
    	setting()->set('description', $request->description);
    	setting()->set('url', $request->url);

    	// save all
    	setting()->save();
    	return redirect()->back()->with('success', 'Settings has been successfully saved');
    }

    /**
    * Update profile user
    *
    * @param $request
    * @return \Illuminate\Http\Response
    */
    public function profile_update(Request $request)
    {
        $data = ['name' => $request->name];

        // if password want to change
        if($request->old_password && $request->new_password) {
            // verify if password is match
            if(!Hash::check($request->old_password, auth()->user()->password)) {
                session()->flash('failed', 'Password is wrong!');
                return redirect()->back();
            }

            $data['password'] = Hash::make($request->new_password);
        } 

        // for update avatar
        if($request->avatar) {
            $data['avatar'] = $request->avatar;

            if(auth()->user()->avatar) {
                unlink(storage_path('app/public/'.auth()->user()->avatar));
            }
        }
        
        // update profile
        auth()->user()->update($data);
        
        return redirect()->back()->with('success', 'Profile updated!');
    }

    /**
    * Store avatar images into database
    *
    * @param $request
    * @return string
    */
    public function upload_avatar(Request $request)
    {
        $request->validate(['avatar'  => 'file|image|mimes:jpg,png,svg|max:1024']);

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');

            $fileName = $file->getClientOriginalName();
            $folder = 'user-'.auth()->id();

            $file->storeAs('avatars/'.$folder, $fileName, 'public');

            return 'avatars/'.$folder.'/'.$fileName;
        }

        return '';
        
    }
}
