@extends('layouts.dash')

@section('title', 'Edit Berita')

@section('content')
<div class="container-fluid px-4 py-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 fw-bold text-primary mb-0">
            <i class="bi bi-newspaper me-2"></i> Edit Berita
        </h1>
        <a href="/dashboard/berita" class="btn btn-success rounded-pill shadow-sm">
            <i class="bi bi-card-list me-1"></i> Daftar Berita
        </a>
    </div>

    <!-- Card Edit -->
    <div class="card border-0 shadow-lg rounded-3">
        <div class="card-body p-4">
            <form action="/berita/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Judul -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Judul Berita</label>
                    <input type="text" name="judul" value="{{ $data->judul }}"
                        class="form-control" placeholder="Masukkan judul berita" required>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Deskripsi</label>
                    <input type="text" name="deskripsi" value="{{ $data->deskripsi }}"
                        class="form-control" placeholder="Masukkan deskripsi singkat" required>
                </div>

                <!-- Kategori -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Kategori</label>
                    <input type="text" name="kategori" value="{{ $data->kategori }}"
                        class="form-control" placeholder="Masukkan kategori berita" required>
                </div>

                <!-- Isi Lengkap -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Isi Berita</label>
                    <textarea name="isi" rows="6" class="form-control" placeholder="Tulis isi berita lengkap..." required>{{ $data->isi }}</textarea>
                </div>

                <!-- Gambar -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Gambar Berita</label>
                    <div class="mb-2">
                        @if($data->gambar)
                        <img src="/uploads/{{ $data->gambar }}"
                            alt="Gambar Berita"
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
                    <a href="/dashboard/berita" class="btn btn-secondary">
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