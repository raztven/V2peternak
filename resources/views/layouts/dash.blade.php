<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Sidebar */
        .sidebar {
            min-height: 100vh;
            background: #212529;
            color: #fff;
            transition: all 0.3s;
        }

        .sidebar h4 {
            font-size: 1.2rem;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #495057;
        }

        .sidebar a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            transition: all 0.2s;
        }

        .sidebar a:hover {
            background: #495057;
            color: #fff;
        }

        .sidebar a.active {
            background: #0d6efd;
            color: #fff;
        }

        /* Logout Button */
        .logout-btn {
            width: 100%;
            text-align: left;
            border: none;
            background: none;
            color: #adb5bd;
            padding: 12px 20px;
            transition: 0.2s;
        }

        .logout-btn:hover {
            background: #dc3545;
            color: #fff;
        }

        /* Topbar */
        .topbar {
            background: #fff;
            padding: 15px 20px;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Main Content */
        main {
            padding: 20px;
        }

        .card-custom {
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border: none;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <!-- Sidebar -->
            <nav class="col-md-2 sidebar p-0">
                <h4>Admin Panel</h4>
                <a href="/"><i class="bi bi-house-door me-2"></i> Home</a>
                <a href="/dashboard" class="active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
                <a href="/dashboard/berita"><i class="bi bi-newspaper me-2"></i> Berita</a>
                <a href="/dashboard/produk"><i class="bi bi-box-seam me-2"></i> Produk</a> <!-- ✅ Menu Produk baru -->
                <a href="/dashboard/contact"><i class="bi bi-envelope me-2"></i> Contact</a>
                <form action="{{ route('logout') }}" method="POST" class="mt-auto">
                    @csrf
                    <button type="submit" class="logout-btn"><i class="bi bi-box-arrow-right me-2"></i> Logout</button>
                </form>
            </nav>


            <!-- Main Content -->
            <div class="col-md-10 p-0">
                <!-- Topbar -->
                <div class="topbar">
                    <h5 class="mb-0">@yield('title')</h5>
                    <div>
                        <i class="bi bi-person-circle me-2"></i> Admin
                    </div>
                </div>

                <main>
                    <div class="card card-custom p-4">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>

</body>

</html>