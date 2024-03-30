<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
        $gejala = Gejala::orderBy('kode', 'asc')->paginate(10);
        $lastCode = $this->generateCode(Gejala::orderBy('kode', 'desc')->first());
        $gejalaDauns = Gejala::where('kategori', 'daun')->paginate(10);
        $gejalaBatangs = Gejala::where('kategori', 'batang')->paginate(10);
        return view('admin.gejala.index', compact('gejala', 'lastCode', 'gejalaDauns', 'gejalaBatangs'));
    }

    private function generateCode($lastCodeGejala)
    {
        $prefix = 'G';
        $lastCode = $lastCodeGejala ? $lastCodeGejala->kode : 'G001';
        $lastCode = str_replace($prefix, '', $lastCode);
        $lastCode = str_pad($lastCode + 1, 3, '0', STR_PAD_LEFT); // 049
        $lastCode = $prefix . $lastCode; // G049

        return $lastCode;
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:gejalas,nama',
            'kategori' => 'required'
        ]);

        $data = $request->all();
        $data['kode'] = $this->generateCode(Gejala::orderBy('kode', 'desc')->first());
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
            'nama' => 'required',
            'kategori' => 'required'
        ]);

        // check if nama is unique
        $gejala = Gejala::where('nama', $request->nama)->where('id', '!=', $request->id)->first();
        if ($gejala) {
            throw ValidationException::withMessages(['nama' => 'Gejala yang anda ubah sudah ada']);
        }

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
