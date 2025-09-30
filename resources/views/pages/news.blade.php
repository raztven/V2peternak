@extends('layouts/app')

@section('title', 'Berita – INDOFARM')

@section('konten')

<main>
    {{-- Hero Section --}}
    <section class="py-5 text-center text-white" style="background: url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1350&q=80') center/cover;">
        <div class="container">
            <div class="bg-dark bg-opacity-50 p-5 rounded-4">
                <h1 class="display-4 fw-bold">Berita & Artikel Terbaru</h1>
                <p class="lead col-lg-8 mx-auto">
                    Ikuti perkembangan terbaru dari industri peternakan dan inovasi yang kami lakukan di <strong>INDOFARM</strong>.
                </p>
            </div>
        </div>
    </section>

    {{-- Berita List --}}
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                @foreach($berita as $b)
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden berita-card">
                        <img src="{{ $b->gambar ? asset('uploads/'.$b->gambar) : 'https://via.placeholder.com/400x200?text=No+Image' }}"
                            class="card-img-top"
                            alt="{{ $b->judul }}"
                            style="height: 220px; object-fit: cover;">

                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary rounded-pill">{{ $b->kategori }}</span>
                                <small class="text-muted">
                                    <i class="bi bi-calendar-event"></i>
                                    {{ $b->created_at->format('d M Y') }}
                                </small>
                            </div>

                            <h5 class="card-title fw-bold">
                                <a href="{{ route('berita.show', $b->id) }}"
                                    class="stretched-link text-decoration-none text-dark">
                                    {{ $b->judul }}
                                </a>
                            </h5>

                            <p class="card-text text-muted mt-2">
                                {{ Str::limit($b->deskripsi, 120, '...') }}
                            </p>

                            <a href="{{ route('berita.show', $b->id) }}"
                                class="btn btn-outline-primary btn-sm rounded-pill mt-auto">
                                Baca Selengkapnya <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-5 d-flex justify-content-center">
                {{ $berita->onEachSide(1)->links() }}
            </div>
        </div>
    </section>
</main>

{{-- CSS Tambahan --}}
<style>
    .berita-card {
        transition: all 0.3s ease-in-out;
    }

    .berita-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
</style>

@endsection