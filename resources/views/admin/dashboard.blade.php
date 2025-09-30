@extends('layouts.dash')

@section('content')
<div class="container">

    {{-- Header dengan Notifikasi --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Dashboard</h1>

        {{-- Notifikasi --}}
        <div class="position-relative">
            <i class="bi bi-bell-fill fs-3 text-dark"></i>
            @isset($totalContact)
                @if($totalContact > 0)
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{ $totalContact }}
                </span>
                @endif
            @endisset
        </div>
    </div>

    {{-- Statistik Cards --}}
    <div class="row g-3 mb-4">
        @isset($totalUsers)
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-4 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-people-fill fs-1 text-primary"></i>
                    <h6 class="mt-2">Total Users</h6>
                    <p class="fs-4 fw-bold text-primary">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>
        @endisset

        @isset($totalProduk)
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-4 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-box-seam fs-1 text-success"></i>
                    <h6 class="mt-2">Total Produk</h6>
                    <p class="fs-4 fw-bold text-success">{{ $totalProduk }}</p>
                </div>
            </div>
        </div>
        @endisset

        @isset($totalBerita)
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-4 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-newspaper fs-1 text-warning"></i>
                    <h6 class="mt-2">Total Berita</h6>
                    <p class="fs-4 fw-bold text-warning">{{ $totalBerita }}</p>
                </div>
            </div>
        </div>
        @endisset

        @isset($totalContact)
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-4 h-100">
                <div class="card-body text-center">
                    <i class="bi bi-envelope-fill fs-1 text-danger"></i>
                    <h6 class="mt-2">Total Contact</h6>
                    <p class="fs-4 fw-bold text-danger">{{ $totalContact }}</p>
                </div>
            </div>
        </div>
        @endisset
    </div>

    <div class="row g-4">
        {{-- Grafik Statistik --}}
        <div class="col-lg-6">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Statistik Pengguna & Produk</h5>
                    <canvas id="statistikChart"></canvas>
                </div>
            </div>
        </div>

        {{-- Kontak Terbaru --}}
        <div class="col-lg-6">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Kontak Masuk Terbaru</h5>
                    <ul class="list-group list-group-flush">
                        @forelse($latestContacts as $c)
                        <li class="list-group-item">
                            <strong>{{ $c->nama }}</strong> - {{ Str::limit($c->pesan, 50) }}
                        </li>
                        @empty
                        <li class="list-group-item text-muted">Belum ada kontak masuk</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

        {{-- Berita Terbaru --}}
        <div class="col-lg-6">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Berita Terbaru</h5>
                    <ul class="list-group list-group-flush">
                        @forelse($latestBerita as $b)
                        <li class="list-group-item">
                            <i class="bi bi-newspaper me-2"></i>{{ $b->judul }}
                        </li>
                        @empty
                        <li class="list-group-item text-muted">Belum ada berita</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

        {{-- Produk Terbaru --}}
        <div class="col-lg-6">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-3">Produk Terbaru</h5>
                    <div class="row">
                        @forelse($latestProduk as $p)
                        <div class="col-4 text-center mb-3">
                            <div class="p-2 border rounded-3">
                                <i class="bi bi-box-seam fs-3 text-success"></i>
                                <p class="small mt-2 mb-0">{{ $p->nama }}</p>
                            </div>
                        </div>
                        @empty
                        <p class="text-muted">Belum ada produk</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('statistikChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Users', 'Produk', 'Berita', 'Kontak'],
            datasets: [{
                label: 'Jumlah',
                data: [{{ $totalUsers ?? 0 }}, {{ $totalProduk ?? 0 }}, {{ $totalBerita ?? 0 }}, {{ $totalContact ?? 0 }}],
                backgroundColor: ['#0d6efd','#198754','#ffc107','#dc3545']
            }]
        }
    });
</script>
@endsection
