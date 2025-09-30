@extends('layouts.dash')
@section('title', 'Dashboard TambahBerita')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg rounded-3">
                <div class="card-header bg-gradient bg-primary text-white text-center py-3">
                    <h3 class="mb-0">
                        <i class="bi bi-file-earmark-plus me-2"></i> Tambah Berita
                    </h3>
                </div>
                <div class="card-body p-4">
                    <form action="/berita/tambah" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Judul -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Judul</label>
                            <input type="text" name="judul" class="form-control" placeholder="Masukkan judul" required>
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" placeholder="Masukkan deskripsi singkat" required>
                        </div>

                        <!-- Kategori -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Kategori</label>
                            <select name="kategori" class="form-select" required>
                                <option value="" disabled selected>Pilih kategori</option>
                                <option value="Berita">Berita</option>
                                <option value="Artikel">Artikel</option>
                                <option value="Event">Event</option>
                            </select>
                        </div>

                        <!-- Isi -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Isi</label>
                            <textarea name="isi" class="form-control" rows="5" placeholder="Masukkan isi lengkap..." required></textarea>
                        </div>

                        <!-- Gambar -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="gambarInput" accept="image/*" required>
                            <div class="mt-3 text-center d-none" id="previewWrapper">
                                <img id="previewImage" src="#" alt="Preview Gambar"
                                    class="img-thumbnail shadow-sm rounded"
                                    width="250" style="object-fit: cover;">
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg shadow-sm">
                                <i class="bi bi-save me-2"></i> Simpan Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tombol ke Daftar -->
            <div class="text-center mt-4">
                <a href="/dashboard" class="btn btn-success rounded-pill shadow-sm px-4">
                    <i class="bi bi-list-ul me-2"></i> Lihat Daftar
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Script Preview Gambar -->
<script>
    document.getElementById("gambarInput").addEventListener("change", function(event) {
        const file = event.target.files[0];
        const previewWrapper = document.getElementById("previewWrapper");
        const previewImage = document.getElementById("previewImage");

        if (file) {
            previewWrapper.classList.remove("d-none");
            previewImage.src = URL.createObjectURL(file);
        } else {
            previewWrapper.classList.add("d-none");
            previewImage.src = "#";
        }
    });
</script>
@endsection