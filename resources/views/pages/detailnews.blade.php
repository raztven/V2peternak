@extends('layouts/app')

@section('title', $berita->judul . ' – INDOFARM')

@section('konten')
<main>
    {{-- Hero Section --}}
    <section class="py-5 text-white text-center"
        style="background: url('{{ $berita->gambar ? asset('uploads/'.$berita->gambar) : 'https://via.placeholder.com/1200x400?text=No+Image' }}') center/cover; min-height: 280px;">
        <div class="container">
            <div class="bg-dark bg-opacity-50 p-4 rounded-4 d-inline-block">
                <h1 class="display-5 fw-bold">{{ $berita->judul }}</h1>
                <p class="mb-1">
                    <span class="badge bg-primary">{{ $berita->kategori }}</span>
                </p>
                <p class="text-light mb-0">
                    <i class="bi bi-calendar-event"></i> {{ $berita->created_at->format('d M Y') }}
                </p>
            </div>
        </div>
    </section>

    {{-- Konten --}}
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                {{-- Artikel --}}
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm p-4 rounded-4">
                        <img src="{{ $berita->gambar ? asset('uploads/'.$berita->gambar) : 'https://via.placeholder.com/800x400?text=No+Image' }}"
                            alt="{{ $berita->judul }}" class="img-fluid rounded mb-4">

                        <div class="content">
                            <p style="white-space: pre-line; font-size: 1.1rem; line-height: 1.7;">
                                {{ $berita->deskripsi }}
                            </p>
                        </div>

                        {{-- Tombol Share --}}
                        <div class="mt-4">
                            <h6 class="fw-bold">Bagikan:</h6>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank" class="btn btn-sm btn-primary me-2">
                                <i class="bi bi-facebook"></i> Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}&text={{ $berita->judul }}" target="_blank" class="btn btn-sm btn-info text-white me-2">
                                <i class="bi bi-twitter-x"></i> Twitter
                            </a>
                            <a href="https://api.whatsapp.com/send?text={{ $berita->judul }}%20{{ urlencode(Request::fullUrl()) }}" target="_blank" class="btn btn-sm btn-success">
                                <i class="bi bi-whatsapp"></i> WhatsApp
                            </a>
                        </div>

                        {{-- Tombol Kembali --}}
                        <div class="mt-4">
                            <a href="{{ url('/news') }}" class="btn btn-outline-secondary rounded-pill">
                                <i class="bi bi-arrow-left"></i> Kembali ke Berita
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 p-3">
                        <h5 class="fw-bold mb-3">Berita Terbaru</h5>
                        <ul class="list-group list-group-flush">
                            @forelse($latestBerita as $lb)
                            <li class="list-group-item px-0">
                                <a href="{{ route('berita.show', $lb->id) }}" class="text-decoration-none text-dark d-flex">
                                    <img src="{{ $lb->gambar ? asset('uploads/'.$lb->gambar) : 'https://via.placeholder.com/80x60?text=No+Img' }}"
                                        alt="{{ $lb->judul }}"
                                        class="rounded me-3" style="width: 80px; height: 60px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-1">{{ Str::limit($lb->judul, 50) }}</h6>
                                        <small class="text-muted"><i class="bi bi-calendar"></i> {{ $lb->created_at->format('d M Y') }}</small>
                                    </div>
                                </a>
                            </li>
                            @empty
                            <li class="list-group-item text-muted">Belum ada berita lain</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection