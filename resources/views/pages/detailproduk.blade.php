<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }

        .product-img {
            border-radius: 12px;
            object-fit: cover;
            width: 100%;
            height: 300px;
        }

        .card {
            border-radius: 16px;
        }

        .btn-success {
            font-size: 1.1rem;
            padding: 12px;
            border-radius: 10px;
        }

        pre {
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>

<body>

    <div class="container py-5">
        <div class="card shadow-lg p-4">
            <div class="row g-4">
                <!-- Kolom Gambar Produk -->
                <div class="col-md-5 text-center">
                    <img src="{{ asset('uploads/'.$produk->gambar) }}" alt="{{ $produk->nama }}" class="product-img shadow-sm">
                </div>

                <!-- Kolom Detail & Form -->
                <div class="col-md-7">
                    <h3 class="mb-2 fw-bold">{{ $produk->nama }}</h3>
                    <p class="text-muted">Harga: <span class="fw-semibold text-success">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span></p>

                    <form id="checkoutForm" action="https://wa.me/6285609502283" method="get" target="_blank">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama lengkap Anda" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nomor HP</label>
                            <input type="text" class="form-control" id="no_hp" placeholder="08xxxxxxxxxx" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="2" placeholder="Alamat lengkap" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" value="1" min="1" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Catatan</label>
                            <textarea class="form-control" id="catatan" rows="2" placeholder="Tambahkan catatan (opsional)"></textarea>
                        </div>

                        <h5 class="mt-3">Total: <span id="totalText" class="text-success fw-bold">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span></h5>

                        <!-- Pesan WA tersembunyi -->
                        <input type="hidden" name="text" id="waMessage">

                        <button type="submit" class="btn btn-success w-100 mt-3">
                            <i class="bi bi-whatsapp me-2"></i> Pesan via WhatsApp
                        </button>
                    </form>

                    <!-- Preview pesan WA -->
                    <div class="mt-4">
                        <h6 class="fw-semibold">Preview Pesan WhatsApp:</h6>
                        <pre id="previewPesan" class="bg-light p-3 rounded border"></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    const jumlahInput = document.getElementById('jumlah');
    const totalText = document.getElementById('totalText');
    const waMessageInput = document.getElementById('waMessage');
    const previewPesan = document.getElementById('previewPesan');

    // ✅ Ambil harga produk dari Blade
    const hargaProduk = {{ (int) $produk->harga }};

    // Update total & pesan WA setiap kali ada input
    document.getElementById('checkoutForm').addEventListener('input', updateAll);

    function updateAll() {
        const jumlah = parseInt(jumlahInput.value) || 1;
        const total = hargaProduk * jumlah;
        totalText.textContent = formatRupiah(total);

        const nama = document.getElementById('nama').value || "-";
        const no_hp = document.getElementById('no_hp').value || "-";
        const alamat = document.getElementById('alamat').value || "-";
        const catatan = document.getElementById('catatan').value || "-";

        let pesan = `Halo, saya ingin memesan ${jumlah} x {{ $produk->nama }} (Rp {{ number_format($produk->harga, 0, ',', '.') }} per item).\n` +
            `Total: ${formatRupiah(total)}\n` +
            `Nama: ${nama}\n` +
            `Nomor HP: ${no_hp}\n` +
            `Alamat: ${alamat}\n` +
            `Catatan: ${catatan}`;

        waMessageInput.value = pesan;
        previewPesan.textContent = pesan;
    }

    function formatRupiah(angka) {
        return 'Rp ' + angka.toLocaleString('id-ID');
    }

    // Jalankan di awal
    updateAll();
</script>


    <!-- Bootstrap Icons (untuk ikon WhatsApp) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</body>

</html>