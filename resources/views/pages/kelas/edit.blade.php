@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('kelas.update', $kelas->id)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="">Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" value="{{ $kelas->nama_kelas }}">
                </div>
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-sm btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection