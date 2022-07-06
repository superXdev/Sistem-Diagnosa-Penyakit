<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\{Penyakit, Gejala};
use Illuminate\Http\Request;

class RuleController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:rules-list', ['only' => ['index']]);
         $this->middleware('permission:rules-edit', ['only' => ['update']]);
    }

    public function index($id)
    {
        $penyakit = Penyakit::select('nama', 'id')->get();
        $gejala = Gejala::all();
        $data_penyakit = Penyakit::find($id);
        $gejala_penyakit = $data_penyakit->gejalas();
        $gejala_id = $gejala_penyakit->pluck('gejala_id')->toArray();

        return view('admin.rules.index', compact('data_penyakit', 'penyakit', 'gejala', 'gejala_penyakit', 'gejala_id'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $penyakit_list = DB::table('gejala_penyakit')->where(['penyakit_id' => $id])->get();

        $gejala_list = [];
        $enabled = 0;
        $disabled = 0;
        $changed = 0;

        foreach($input as $key => $value) {
            if(str_contains($key, 'gejala')) {
                $gejala_id = explode('-', $key)[1];

                $gejala_penyakit = DB::table('gejala_penyakit')
                    ->where(['penyakit_id' => $id, 'gejala_id' => $gejala_id]);

                if(count($gejala_penyakit->get()) == 0) {
                    DB::table('gejala_penyakit')
                        ->insert([
                            'penyakit_id' => $id, 
                            'gejala_id' => $gejala_id, 
                            'value_cf' => $value
                        ]);
                } else {
                    if($gejala_penyakit->first()->value_cf != $value) {
                        $gejala_penyakit->update(['value_cf' => $value]);
                        $changed++;
                    }
                }

                array_push($gejala_list, $gejala_id);
                $enabled++;
            }
        }


        foreach($penyakit_list as $penyakit) {
            if(!in_array($penyakit->gejala_id, $gejala_list)) {
                $data = DB::table('gejala_penyakit')
                    ->where(['penyakit_id' => $id, 'gejala_id' => $penyakit->gejala_id])
                    ->first();

                DB::table('gejala_penyakit')->delete($data->id);
                $disabled++;
            }
        }


        activity()
           ->causedBy(auth()->user())
           ->withProperties([
                'penyakit' => Penyakit::find($id)->nama,
                'enabled' => $enabled, 
                'disabled' => $disabled,
                'changed' => $changed
            ])
           ->log('Updated basis rules');

        return back()->with('success', 'Rules berhasil diubah');
    }
}
