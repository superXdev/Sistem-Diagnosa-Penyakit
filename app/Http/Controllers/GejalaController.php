<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:gejala-list', ['only' => ['index']]);
         $this->middleware('permission:gejala-create', ['only' => ['store']]);
         $this->middleware('permission:gejala-edit', ['only' => ['update', 'json']]);
         $this->middleware('permission:gejala-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $gejala = Gejala::paginate(10);

        return view('admin.gejala.index', compact('gejala'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required'
        ]);

        $data = $request->all();

        Gejala::create($data);

        return back()->with('success', 'Data gejala berhasil disimpan');
    }

    public function json()
    {
        $data = Gejala::find(request('id'));

        return response()->json($data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required'
        ]);

        $data = $request->all();

        Gejala::find($request->id)->update($data);

        return back()->with('success', 'Data gejala berhasil diubah');
    }

    public function destroy(Gejala $gejala)
    {
        $gejala->delete();
        return back()->with('success', 'Data gejala berhasil dihapus');
    }
}
