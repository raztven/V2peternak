@extends('layouts.dash')

@section('title', 'Dashboard Berita')

@section('content')
@if($berita->isEmpty())
<div class="alert alert-info">Belum ada data berita yang tersedia.</div>
<div class="mt-3">
    <a href="/dashboard/tambah" class="btn btn-primary">
        <i class="bi bi-plus-circle me-1"></i> Tambah Berita
    </a>
</div>
@else
<div class="card shadow">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <span><i class="bi bi-newspaper"></i> Data Berita</span>
        <a href="/dashboard/tambah" class="btn btn-light btn-sm">
            <i class="bi bi-plus-circle me-1"></i> Tambah Berita
        </a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-primary">
                <tr class="text-center">
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($berita as $i => $b)
                <tr>
                    <td class="text-center">{{ $i+1 }}</td>
                    <td class="text-center">
                        @if($b->gambar)
                        <img src="/uploads/{{ $b->gambar }}"
                            alt="gambar" width="80" height="60"
                            class="rounded shadow-sm" style="object-fit: cover;">
                        @else
                        <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>{{ $b->judul }}</td>
                    <td>{{ Str::limit($b->deskripsi, 50, '...') }}</td>
                    <td>{{ $b->kategori }}</td>
                    <td>{{ $b->created_at->format('d-m-Y H:i') }}</td>
                    <td class="text-center">
                        <div class="d-flex">
                            <a href="/berita/edit/{{ $b->id }}" class="btn btn-sm btn-warning me-1">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <a href="/berita/delete/{{ $b->id }}" class="btn btn-sm btn-danger   me-1">
                                <i class="bi bi-trash"></i> Hapus
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection