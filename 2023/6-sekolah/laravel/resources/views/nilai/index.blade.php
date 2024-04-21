@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Nilai</h3>
            <a href="{{ route('nilai.create') }}" class="btn btn-primary float-right">Tambah Nilai</a>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table id="tableNilai" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Siswa</th>
                        <th>Guru</th>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nilai as $n)
                        <tr>
                            <td>{{ $n->id }}</td>
                            <td>{{ $n->siswa->nama }}</td>
                            <td>{{ $n->guru->nama }}</td>
                            <td>{{ $n->mata_pelajaran }}</td>
                            <td>{{ $n->nilai }}</td>
                            <td>
                                <a href="{{ route('nilai.edit', $n->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('nilai.destroy', $n->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection