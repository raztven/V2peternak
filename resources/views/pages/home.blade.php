@extends('layouts/app')
@section('konten')

<!-- HERO -->
<header id="home" class="hero" style="background: url('uploads/bing.png') center/cover no-repeat;">
    <div class="hero-inner container">
        <span class="badge rounded-pill px-3 py-2 mb-3 bg-light text-dark shadow-sm">
            <i class="bi bi-patch-check-fill me-1"></i>Sejak 2005 | Sertifikasi ISO 22000
        </span>
        <h1 class="mb-3">
            <span>Peternakan Modern</span><br>
            <span class="highlight">Terintegrasi & Berkelanjutan</span>
        </h1>
        <p class="lead col-lg-8 mx-auto mb-4">
            Dari sapi, unggas, hingga pakan — semua dalam ekosistem yang <strong>terpercaya & terlacak</strong>.
        </p>
        <div class="d-flex gap-3 justify-content-center mt-10">
            <a href="#produk" class="btn btn-primary btn-lg"><i class="bi bi-bag-heart me-1"></i> Lihat Produk</a>
            <a href="#kontak" class="btn btn-outline-light btn-lg"><i class="bi bi-telephone me-1"></i> Hubungi Kami</a>
        </div>
    </div>
</header>

<!-- TENTANG -->
<section id="tentang" class="py-5 bg-soft">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <img class="w-100 shadow-soft rounded-4" alt="Peternakan INDOFARM" src="https://images.unsplash.com/photo-1500595046743-cd271d694d30?q=80&w=1600&auto=format&fit=crop" />
            </div>
            <div class="col-lg-6">
                <h2 class="section-title mb-3">Tentang INDOFARM</h2>
                <p class="section-sub">Kami mengelola rantai pasok end-to-end: breeding, penggemukan, pakan, hingga distribusi dingin.</p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="p-4 bg-white rounded-4 shadow-soft h-100">
                            <div class="icon mb-3"><i class="bi bi-shield-check"></i></div>
                            <h6 class="fw-bold">Kualitas Teruji</h6>
                            <p class="mb-0 small">Laboratorium internal, standar ISO & HACCP, audit berkala.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-4 bg-white rounded-4 shadow-soft h-100">
                            <div class="icon mb-3"><i class="bi bi-recycle"></i></div>
                            <h6 class="fw-bold">Ramah Lingkungan</h6>
                            <p class="mb-0 small">Manajemen limbah & biogas, efisiensi pakan dan air.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="#galeri" class="btn btn-outline-success"><i class="bi bi-images me-1"></i> Lihat Galeri</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LAYANAN -->
<section id="layanan" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Solusi & Layanan</h2>
            <p class="section-sub">Dari hulu ke hilir untuk pasar ritel, HORECA, dan industri.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card feature-card shadow-soft p-3 h-100">
                    <div class="icon mb-3"><i class="bi bi-bag"></i></div>
                    <h5 class="fw-bold">Sapi Potong & Perah</h5>
                    <p class="mb-3">Breeding & penggemukan sapi dengan nutrisi seimbang, jejak ternak tercatat digital.</p>
                    <img class="w-100 rounded-3" alt="Sapi" src="uploads/sapiperah.png">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card shadow-soft p-3 h-100">
                    <div class="icon mb-3"><i class="bi bi-egg-fried"></i></div>
                    <h5 class="fw-bold">Unggas & Telur</h5>
                    <p class="mb-3">Ayam pedaging & petelur dengan biosekuriti ketat dan pakan formulasi ahli.</p>
                    <img class="w-100 rounded-3" alt="Unggas" src="uploads/unggas.png">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card shadow-soft p-3 h-100">
                    <div class="icon mb-3"><i class="bi bi-bag"></i></div>
                    <h5 class="fw-bold">Pakan & Riset Nutrisi</h5>
                    <p class="mb-3">Produksi pakan, konsultasi formulasi, dan pendampingan teknis ke mitra peternak.</p>
                    <img class="w-100 rounded-3" alt="Pakan" src="uploads/lab.png">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATS / IMPACT -->
<section class="py-5 bg-soft">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg-3">
                <div class="stat p-4 shadow-soft">
                    <h3 class=" mb-0">+120K</h3>
                    <div class="small text-secondary">Ekor ternak / tahun</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat p-4 shadow-soft">
                    <h3 class="t mb-0">98.7%</h3>
                    <div class="small text-secondary">Tingkat ketertelusuran</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat p-4 shadow-soft">
                    <h3 class=" mb-0">-32%</h3>
                    <div class="small text-secondary">Emisi / kg bobot hidup</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat p-4 shadow-soft">
                    <h3 class=" mb-0">24/7</h3>
                    <div class="small text-secondary">Layanan pelanggan</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRODUK -->
<section id="produk" class="py-5">
    <div class="container">
        <div class="text-center mb-2">
            <h2 class="section-title">Produk Unggulan</h2>
            <p class="section-sub">Standar mutu untuk ritel modern & industri.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-soft">
                    <img alt="Daging Sapi" class="card-img-top" src="uploads/dsprime.png" style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Daging Sapi Prime</h5>
                        <p class="card-text">Potongan premium, cold-chain utuh, label nutrisi & asal ternak.</p>
                        <a class="btn btn-primary" href="#kontak">Minta Penawaran</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-soft">
                    <img alt="Ayam Broiler" class="card-img-top" src="uploads/absegar.png" style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Ayam Broiler Segar</h5>
                        <p class="card-text">Berat seragam, proses higienis, pilihan kemasan vakum.</p>
                        <a class="btn btn-primary" href="#kontak">Minta Penawaran</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-soft">
                    <img alt="Pakan Ternak" class="card-img-top" src="uploads/propakan.png" style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Pakan Nutrisi Pro</h5>
                        <p class="card-text">Formula efisien, FCR unggul, dukungan teknis ke peternak mitra.</p>
                        <a class="btn btn-primary" href="#kontak">Minta Penawaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- TESTIMONI / CTA -->
<section class="py-5 bg-soft">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="p-4 bg-white rounded-4 shadow-soft h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="uploads/rnslogo.png" alt="Klien" class="rounded-circle" width="56" height="56" />
                        <div>
                            <strong>Restaurant Owner - Restoran Nusantara</strong>
                            <div class="small text-secondary">Klien sejak 2018</div>
                        </div>
                    </div>
                    <p class="mb-0">“Konsistensi kualitas dan pengiriman INDOFARM itu juara. Traceability jelas, bikin kami tenang.”</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-5 text-white rounded-4 shadow-soft" style="background:linear-gradient(135deg,var(--primary),var(--primary-2)), url('https://images.unsplash.com/photo-1513863324946-1f5b2cbabe6d?q=80&w=1600&auto=format&fit=crop') center/cover; background-blend-mode:multiply;">
                    <h3 class="mb-3">Butuh pasokan rutin untuk bisnis Anda?</h3>
                    <p class="mb-4">Tim sales B2B kami siap merancang kontrak pasok sesuai kebutuhan volume & kualitas Anda.</p>
                    <a href="#kontak" class="btn btn-light"><i class="bi bi-envelope-paper-heart me-1"></i> Hubungi Sales</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GALERI -->
<section id="galeri" class="py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="section-title">Galeri Peternakan</h2>
            <p class="section-sub">Sekilas fasilitas dan kegiatan operasional kami.</p>
        </div>
        <div class="row g-3 gallery">
            <div class="col-6 col-md-3"><img class="w-100 h-100" alt="kandang" src="uploads/bigcage.png " /></div>
            <div class="col-6 col-md-3"><img class="w-100 h-100" alt="sapi" src="uploads/limousin.png" /></div>
            <div class="col-6 col-md-3"><img class="w-100 h-100" alt="pakan" src="uploads/pakanternak.png" /></div>
            <div class="col-6 col-md-3"><img class="w-100 h-100" alt="telur" src="uploads/ts.png" /></div>
        </div>
    </div>
</section>

<!-- KONTAK -->
<section id="kontak" class="py-5 bg-soft">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <h2 class="section-title mb-3">Hubungi Kami</h2>
                <p class="section-sub">Tinggalkan pesan, tim kami akan segera merespons.</p>
                <form class="row g-3" action="{{ url('/contact/tambah') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-md-6">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="nama@email.com" required>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Perusahaan</label>
                        <input type="text" name="perusahaan" class="form-control" placeholder="Nama perusahaan">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Pesan</label>
                        <textarea name="pesan" class="form-control" rows="4" placeholder="Tulis kebutuhan Anda..." required></textarea>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-send me-1"></i>Kirim
                        </button>
                    </div>
                </form>

            </div>
            <div class="col-lg-6">
                <div class="p-4 bg-white rounded-4 shadow-soft h-100">
                    <h5 class="fw-bold mb-3">Kantor & Fasilitas</h5>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-geo-alt me-2 text-primary"></i>Jl. Diponegoro No.08, Bandung</li>
                        <li class="mb-2"><i class="bi bi-telephone me-2 text-primary"></i>(021) 1234-5678</li>
                        <li class="mb-2"><i class="bi bi-envelope me-2 text-primary"></i>sales@indofarm.co.id</li>
                        <li class="mb-2"><i class="bi bi-clock me-2 text-primary"></i>Senin–Jumat, 08.00–17.00 WIB</li>
                    </ul>
                    <img class="w-100 rounded-4" alt="Peta lokasi" src="uploads/locationpeternakan.png" />
                </div>
            </div>
        </div>
    </div>
</section>

@endsection