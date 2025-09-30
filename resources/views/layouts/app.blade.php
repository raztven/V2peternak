<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>INDOFARM – Perusahaan Peternakan</title>
    <link rel="icon" type="image/x-icon" href="/uploads/logo.png">
    <meta name="description"
        content="INDOFARM adalah perusahaan peternakan terintegrasi: sapi, unggas, dan pakan dengan standar terbaik." />

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary: #7B4B27;
            --primary-2: #A47148;
            --accent: #EED9C4;
            --dark: #2b1a10;
            --soft-bg: #fffaf6;
        }

        body {
            font-family: "Segoe UI", Roboto, sans-serif;
            color: #3a2b21;
            background: var(--soft-bg);
        }

        /* Modern Button */
        .btn-primary {
            --bs-btn-bg: var(--primary);
            --bs-btn-border-color: var(--primary);
            --bs-btn-hover-bg: #62391f;
            --bs-btn-hover-border-color: #62391f;
            border-radius: 50px;
            padding: 0.75rem 1.5rem;
            box-shadow: 0 4px 14px rgba(123, 75, 39, 0.25);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
        }

        .btn-outline-light {
            border-radius: 50px;
            padding: 0.75rem 1.5rem;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background: #fff;
            color: var(--primary) !important;
        }

        /* Navbar */
        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.85) !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .navbar .nav-link {
            font-weight: 600;
            position: relative;
            padding: 8px 12px;
        }

        .navbar .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -3px;
            width: 0%;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s ease;
        }

        .navbar .nav-link:hover::after {
            width: 100%;
        }

        /* Hero */
        .hero {
            position: relative;
            min-height: 100vh;
            display: grid;
            place-items: center;
            text-align: center;
            color: #fff;
            background: url('https://images.unsplash.com/photo-1603161997074-8400b1f1b1ac?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, rgba(47, 27, 13, 0.75), rgba(123, 75, 39, 0.65));
        }

        .hero-inner {
            position: relative;
            z-index: 2;
            animation: fadeUp 1s ease-out;
        }

        .hero h1 {
            font-weight: 900;
            line-height: 1.2;
            font-size: 3rem;
        }

        .hero h1 .highlight {
            color: var(--accent);
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Footer */
        footer {
            background: linear-gradient(180deg, #3a2415, #2b1a10);
            color: #f0e5dc;
        }

        footer h5,
        footer h6 {
            color: #fff;
        }

        footer a {
            color: #f0e5dc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: var(--accent);
            text-decoration: none;
        }

        footer .social-icons a {
            font-size: 1.25rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        footer .social-icons a:hover {
            background: var(--accent);
            color: var(--dark);
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold " href="#home">INDOFARM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
                aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#produk">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="/produk">Pesan Sekarang</a></li>
                    <li class="nav-item"><a class="nav-link" href="/news">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#kontak">Kontak</a></li>

                    <!-- DROPDOWN -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="halamanDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Halaman Lain
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="halamanDropdown">
                            <li><a class="dropdown-item" href="/news">Berita</a></li>
                            <li><a class="dropdown-item" href="#mitra">Mitra</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#faq">FAQ</a></li>
                        </ul>
                    </li> -->
                    <!-- END DROPDOWN -->
                </ul>
            </div>
        </div>
    </nav>



    @yield('konten')

    <!-- FOOTER -->
    <footer class="pt-5 pb-4 mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <h5 class="fw-bold">INDOFARM</h5>
                    <p class="small mb-3">Perusahaan peternakan terintegrasi untuk Indonesia yang sehat dan
                        berkelanjutan.</p>
                    <div class="social-icons d-flex gap-3">
                        <a href="http://wa.me/6285609502283"><i class="bi bi-whatsapp"></i></a>
                        <a href="https://www.instagram.com/pixellmon/"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold">Tautan</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#tentang">Tentang</a></li>
                        <li><a href="#layanan">Layanan</a></li>
                        <li><a href="#produk">Produk</a></li>
                        <li><a href="/produk">Pesan Sekarang</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold">Legal</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-top border-light mt-4 pt-3 small text-center">
                © <span id="year"></span> pixellmonXraztven. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>