@extends('layouts.app')
@section('content')
<div class="page-title-box d-flex align-items-center justify-content-between">
    <h4 class="mb-0 font-size-18">Kelas</h4>
</div>
<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('kelas.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead class="thead-light">
                            <form action="{{url('cari')}}" method="GET">
                                <input type="text" name="cari" placeholder="Cari Kelas" value="{{ old('cari') }}">
                                <input type="submit" value="CARI">
                            </form>
                            <tr>
                                <td>No</td>
                                <td>@sortablelink('nama_kelas')</td>
                                <td>Opsi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @forelse ($kelas as $k)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $k->nama_kelas }}</td>
                                    <td>
                                    <form action="{{ route('kelas.destroy',$k->id)}}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{ route('kelas.edit',$k->id)}}" class="btn btn-warning">edit</a>
                                        <button type="submit"class="btn btn-danger">Hapus</button>
                                    </form>
                                        </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2"> Maaf tidak ada data yang tersedia! </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{$kelas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
