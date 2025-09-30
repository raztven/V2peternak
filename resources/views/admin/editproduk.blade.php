@extends('layouts.dash')

@section('title', 'Edit Produk')

@section('content')
<div class="container-fluid px-4 py-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 fw-bold text-primary mb-0">
            <i class="bi bi-pencil-square me-2"></i> Edit Produk
        </h1>
        <a href="/dashboard/produkdas" class="btn btn-success rounded-pill shadow-sm">
            <i class="bi bi-box-seam me-1"></i> Daftar Produk
        </a>
    </div>

    <!-- Card Edit -->
    <div class="card border-0 shadow-lg rounded-3">
        <div class="card-body p-4">
            <form action="/produk/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- Nama Produk -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Produk</label>
                    <input type="text" name="nama" value="{{ $data->nama }}"
                        class="form-control" placeholder="Masukkan nama produk" required>
                </div>

                <!-- Deskripsi Singkat -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Deskripsi Singkat</label>
                    <input type="text" name="deskripsi" value="{{ $data->deskripsi }}"
                        class="form-control" placeholder="Masukkan deskripsi singkat" required>
                    <small class="text-muted">Ditampilkan di daftar produk</small>
                </div>

                <!-- Deskripsi Lengkap -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Deskripsi Lengkap</label>
                    <textarea name="deslong" rows="5" class="form-control"
                        placeholder="Tulis deskripsi lengkap produk..." required>{{ $data->deslong }}</textarea>
                    <small class="text-muted">Ditampilkan di halaman detail produk</small>
                </div>

                <!-- Harga -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Harga Produk</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number" name="harga" value="{{ $data->harga }}"
                            class="form-control" placeholder="Masukkan harga" required>
                    </div>
                </div>

                <!-- Gambar -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Gambar Produk</label>
                    <div class="mb-2">
                        @if($data->gambar)
                        <img src="/uploads/{{ $data->gambar }}"
                            alt="Gambar Produk"
                            class="img-thumbnail rounded shadow-sm"
                            width="200" style="object-fit: cover;">
                        @else
                        <span class="text-muted">Belum ada gambar</span>
                        @endif
                    </div>
                    <input type="file" name="gambar" class="form-control">
                    <small class="text-muted">*Kosongkan jika tidak ingin mengganti gambar</small>
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-end gap-2">
                    <a href="/dashboard/produkdas" class="btn btn-secondary">
                        <i class="bi bi-arrow-left me-1"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary shadow-sm">
                        <i class="bi bi-save me-2"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection