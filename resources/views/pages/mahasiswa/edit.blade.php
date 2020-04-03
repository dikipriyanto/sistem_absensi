@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card body">
        <form action="{{route('mahasiswa.update', $mahasiswas->id)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="">Nim</label>
                <input type="text" name="nim" class="form-control" value="{{ $mahasiswas->nim }}">
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswas->nama }}">
            </div>
            <div class="form-group">
                <label for="">Kelas</label>
                <select name="kelas" id="">
                    <option value="{{ $mahasiswas->kelas->id }}">{{ $mahasiswas->kelas->nama_kelas }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $mahasiswas->email }}">
            </div>
            <div class="form-group">
                <button type="submit">Simpan</button>
            </div>
        </form>
        </div>
    </div>
@endsection