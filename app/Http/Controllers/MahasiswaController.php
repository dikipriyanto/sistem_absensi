<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Kelas;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswas = Mahasiswa::paginate(5);
        return view('pages.mahasiswa.index', compact('mahasiswas'));
    }

    public function create(){
        $kelas = Kelas::orderBy('nama_kelas', 'ASC')->get();
        return view('pages.mahasiswa.create', compact('kelas'));
    }

    public function store(Request $request){

        $mahasiswa = Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas_id' => $request->kelas,
            'email' => $request->email
        ]);


        return redirect()->route('mahasiswa.index');

    }

    public function edit($mahasiswa){
        $mahasiswas = Mahasiswa::find($mahasiswa);
        return view('pages.mahasiswa.edit', compact('mahasiswas'));
    }

    public function update(Request $request, $mahasiswa){
        $mahasiswas = Mahasiswa::find($mahasiswa);

        $mahasiswas->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas_id' => $request->kelas,
            'email' => $request->email
        ]);

        return redirect()->route('mahasiswa.index');
    }

    public function destroy($mahasiswa){

        $mahasiswas = Mahasiswa::findOrFail($mahasiswa);

        $mahasiswas->delete();
        return redirect()->route('mahasiswa.index');
    }
}
