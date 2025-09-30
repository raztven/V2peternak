@extends('layouts/app')

@section('title', 'Produk – INDOFARM')

@section('konten')

<main>
    <!-- Hero Section -->
    <section class="bg-light py-5 text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Produk Unggulan INDOFARM</h1>
            <p class="lead text-muted">
                Temukan berbagai produk unggulan dari INDOFARM untuk mendukung kebutuhan peternakan dan pertanian Anda.
            </p>
        </div>
    </section>

    <!-- Produk Section -->
    <section id="produk" class="py-5 bg-white">
        <div class="container">

            <!-- Search Box -->
            <div class="row mb-4 justify-content-center">
                <div class="col-md-6">
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari produk...">
                </div>
            </div>

            <h2 class="text-center fw-bold mb-5">Produk Kami</h2>
            <div class="row g-4" id="produkList">

                @foreach($produk as $p)
                <div class="col-md-6 col-lg-4 produk-item">
                    <div class="card shadow-sm h-100 border-0 hover-shadow" style="transition: 0.3s ease-in-out;">
                        <img src="{{ $p->gambar ? asset('uploads/'.$p->gambar) : 'https://via.placeholder.com/400x250?text=No+Image' }}"
                            class="card-img-top"
                            alt="{{ $p->nama }}"
                            style="object-fit: cover; height: 250px;">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-semibold nama-produk">{{ $p->nama }}</h5>
                            <p class="card-text text-muted small flex-grow-1">
                                {{ Str::limit($p->deskripsi, 80, '...') }}
                            </p>
                            <div class="mt-3">
                                <p class="text-success fw-bold mb-2">
                                    Rp {{ number_format($p->harga, 0, ',', '.') }}
                                </p>
                                <a href="{{ route('produk.show', $p->id) }}"
                                    class="btn w-100"
                                    style="background-color:#7B4019; color:white;">
                                    Pesan Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="mt-5 d-flex justify-content-center">
                {{ $produk->links() }}
            </div>
        </div>
    </section>
</main>

<!-- Search Filter Script -->
<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        const keyword = this.value.toLowerCase();
        const produk = document.querySelectorAll('.produk-item');

        produk.forEach(function(item) {
            const nama = item.querySelector('.nama-produk').textContent.toLowerCase();
            if (nama.includes(keyword)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
</script>

@endsection