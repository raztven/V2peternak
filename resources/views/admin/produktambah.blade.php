@extends('layouts.dash')
@section('title', 'Dashboard TambahProduk')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg rounded-3">
                <div class="card-header bg-gradient bg-success text-white text-center py-3">
                    <h3 class="mb-0">
                        <i class="bi bi-box-seam me-2"></i> Tambah Produk
                    </h3>
                </div>
                <div class="card-body p-4">
                    <form action="/produk/tambah" method="post" enctype="multipart/form-data">
                        @csrf

                        <!-- Nama Produk -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Produk</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama produk" required>
                        </div>

                        <!-- Deskripsi Lengkap -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Deskripsi Lengkap</label>
                            <textarea name="deskripsi" rows="4" class="form-control" placeholder="Masukkan deskripsi lengkap..." required></textarea>
                        </div>

                        <!-- Deskripsi Singkat -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Deskripsi Singkat</label>
                            <input type="text" name="deslong" class="form-control" placeholder="Masukkan deskripsi singkat" required>
                        </div>

                        <!-- Harga -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" name="harga" class="form-control" placeholder="Masukkan harga" required>
                            </div>
                        </div>

                        <!-- Gambar Produk -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Gambar Produk</label>
                            <input type="file" name="gambar" class="form-control" id="gambarInput" accept="image/*" required>
                            <div class="mt-3 text-center d-none" id="previewWrapper">
                                <img id="previewImage" src="#" alt="Preview Gambar"
                                    class="img-thumbnail shadow-sm rounded"
                                    width="250" style="object-fit: cover;">
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg shadow-sm">
                                <i class="bi bi-save me-2"></i> Simpan Produk
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tombol ke Daftar Produk -->
            <div class="text-center mt-4">
                <a href="/produk" class="btn btn-secondary rounded-pill shadow-sm px-4">
                    <i class="bi bi-arrow-left me-2"></i> Kembali ke Daftar
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