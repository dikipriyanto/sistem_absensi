<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;


class KelasController extends Controller
{
    public function index(){
        $kelas = Kelas::sortable()->paginate(5);
        return view('pages.kelas.index', compact('kelas'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama_kelas' => 'required|min:2'
        ]);

        $kelas = Kelas::create([
            'nama_kelas' => $request->nama_kelas
        ]);

        return redirect()->route('kelas.index');
    }

    public function destroy($kela){
        $kelas = Kelas::findOrFail($kela);

        $kelas->delete();
        return redirect()->route('kelas.index');
    }

    public function edit($kela){
        $kelas = Kelas::find($kela);
        return view('pages.kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $kela){
        $this->validate($request, [
            'nama_kelas' => 'required|min:2'
        ]);

        $kelas = Kelas::findOrFail($kela);

        $kelas->update([
            'nama_kelas' => $request->nama_kelas
        ]);

        return redirect()->route('kelas.index');
    }

    public function cari(Request $request){
        $cari = $request->cari;

        // $kelas = DB::table('kelas')->where('nama_kelas','like',"%".$cari."%")->paginate(5);
        $kelas = Kelas::where('nama_kelas','like',"%".$cari."%")->paginate(5);

        return view('pages.kelas.index',['kelas' => $kelas]);
    }


}
