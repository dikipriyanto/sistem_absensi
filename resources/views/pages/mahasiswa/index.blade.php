@extends('layouts.app')
@section('content')
<div class="page-title-box d-flex align-items-center justify-content-between">
    <h4 class="mb-0 font-size-18">Mahasiswa</h4>
</div>
<div class="card">
    <div class="card-body">
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">tambah</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->kelas->nama_kelas }}</td>
                    <td>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="post">
                            @csrf
                            <a href="{{ route('mahasiswa.edit', $mahasiswa ->id)}}" class="btn btn-warning">edit</a>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
        {{ $mahasiswas->links() }}
    </div>
</div>
@endsection