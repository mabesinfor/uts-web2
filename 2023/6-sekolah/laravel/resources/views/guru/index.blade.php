@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Guru</h3>
            <a href="{{ route('guru.create') }}" class="btn btn-primary float-right">Tambah Guru</a>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table id="tableGuru" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Mata Pelajaran</th>
                        <th>Nomor Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guru as $g)
                        <tr>
                            <td>{{ $g->id }}</td>
                            <td>{{ $g->nama }}</td>
                            <td>{{ $g->mata_pelajaran }}</td>
                            <td>{{ $g->no_telp }}</td>
                            <td>
                                <a href="{{ route('guru.edit', $g->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('guru.destroy', $g->id) }}" method="POST" style="display: inline-block;">
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