@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
        <form action="{{ route('mahasiswa.store') }}" method="post">
            @csrf
                <div class="form-group">
                    <label for="">NIM</label>
                    <input type="text" class="form-control" name="nim">
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label for="">Kelas</label>
                    <select name="kelas" id="">
                        @foreach ($kelas as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <button type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection