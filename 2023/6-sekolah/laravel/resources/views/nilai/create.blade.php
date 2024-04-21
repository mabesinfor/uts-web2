@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Nilai</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('nilai.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="siswa_id">Siswa</label>
                    <select class="form-control select2" id="siswa_id" name="siswa_id" required>
                        <option value="">Pilih Siswa</option>
                        @foreach ($siswa as $s)
                            <option value="{{ $s->id }}">{{ $s->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="guru_id">Guru</label>
                    <select class="form-control select2" id="guru_id" name="guru_id" required>
                        <option value="">Pilih Guru</option>
                        @foreach ($guru as $g)
                            <option value="{{ $g->id }}">{{ $g->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="mata_pelajaran">Mata Pelajaran</label>
                    <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" required>
                </div>
                <div class="form-group">
                    <label for="nilai">Nilai</label>
                    <input type="number" class="form-control" id="nilai" name="nilai" min="0" max="100" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection