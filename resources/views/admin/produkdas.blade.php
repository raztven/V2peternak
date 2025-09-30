@extends('layouts.dash')

@section('title', 'Dashboard Produk')

@section('content')
@if($produk->isEmpty())
<div class="alert alert-info">Belum ada data produk yang tersedia.</div>
<div class="mt-3">
    <a href="/dashboard/tambahp " class="btn btn-success">
        <i class="bi bi-plus-circle me-1"></i> Tambah Produk
    </a>
</div>
@else
<div class="card shadow">
    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
        <span><i class="bi bi-box-seam"></i> Data Produk</span>
        <a href="/dashboard/tambahp" class="btn btn-light btn-sm">
            <i class="bi bi-plus-circle me-1"></i> Tambah Produk
        </a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-success">
                <tr class="text-center">
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produk as $i => $p)
                <tr>
                    <td class="text-center">{{ $i+1 }}</td>
                    <td class="text-center">
                        @if($p->gambar)
                        <img src="{{ asset('uploads/'.$p->gambar) }}"
                            alt="gambar produk" width="80" height="60"
                            class="rounded shadow-sm" style="object-fit: cover;">
                        @else
                        <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ Str::limit($p->deskripsi, 50, '...') }}</td>
                    <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
                    <td>{{ $p->created_at->format('d-m-Y H:i') }}</td>
                    <td class="text-center">
                        <div class="d-flex">
                            <a href="/produk/edit/{{ $p->id }}" class="btn btn-sm btn-warning me-1">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <a href="/produk/delete/{{ $p->id }}" class="btn btn-sm btn-danger   me-1">
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