<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PenyakitController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:penyakit-list', ['only' => ['index']]);
        $this->middleware('permission:penyakit-create', ['only' => ['store']]);
        $this->middleware('permission:penyakit-edit', ['only' => ['update', 'json']]);
        $this->middleware('permission:penyakit-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $penyakit = Penyakit::all();
        $lastCode = $this->generateCode(Penyakit::orderBy('kode', 'desc')->first());
        $penyakitDauns = Penyakit::where('kategori', 'daun')->get();
        $penyakitBatangs = Penyakit::where('kategori', 'batang')->get();
        return view('admin.penyakit.index', compact('penyakit', 'lastCode', 'penyakitDauns', 'penyakitBatangs'));
    }

    private function  generateCode($lastCodePenyakit)
    {
        $prefix   = 'P';
        $lastCode = $lastCodePenyakit ? $lastCodePenyakit->kode : 'P001';
        $lastCode = str_replace($prefix, '', $lastCode);
        $lastCode = str_pad($lastCode + 1, 3, '0', STR_PAD_LEFT);          // 049
        $lastCode = $prefix . $lastCode;                                   // P049

        return $lastCode;
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required|unique:penyakits,nama',
            'kategori' => 'required',
            'penyebab' => 'required'
        ], [
            'nama.unique'       => 'Penyakit sudah ada',
            'nama.required'     => 'Nama penyakit harus diisi',
            'kategori.required' => 'Kategori penyakit harus diisi',
            'penyebab.required' => 'Penyebab penyakit harus diisi'
        ]);

        $data         = $request->all();
        $data['kode'] = $this->generateCode(Penyakit::orderBy('kode', 'desc')->first());
        Penyakit::create($data);

        return back()->with('success', 'Data penyakit berhasil disimpan');
    }

    public function json()
    {
        $data = Penyakit::find(request('id'));

        return response()->json($data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama'     => 'required',
            'kategori' => 'required',
            'penyebab' => 'required'
        ]);

        $penyakit = Penyakit::where('nama', $request->nama)->where('id', '!=', $request->id)->first();
        if ($penyakit) {
            throw ValidationException::withMessages(['nama' => 'Penyakit yang anda ubah sudah ada']);
        }

        $data = $request->all();
        Penyakit::find($request->id)->update($data);

        return back()->with('success', 'Data penyakit berhasil diubah');
    }

    public function destroy(Penyakit $penyakit)
    {
        $penyakit->delete();
        return back()->with('success', 'Data penyakit berhasil dihapus');
    }
}
