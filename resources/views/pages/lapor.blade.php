@extends('layouts.app')

@section('title', 'Lapor Kehilangan - MyApp')

@section('content')
<div class="container py-5">
    <!-- Judul Halaman -->
    <div class="row justify-content-center mb-4">
        <div class="col-lg-8 text-center">
            <span class="badge bg-danger bg-opacity-10 text-danger mb-2 px-3 py-2 rounded-pill fw-semibold">Formulir Pengaduan</span>
            <h2 class="fw-bold">Buat Laporan Barang / Peliharaan Hilang</h2>
            <p class="text-muted">
                Isi informasi selengkap-lengkapnya agar komunitas atau relawan dapat membantu melakukan pencarian dengan cepat.
            </p>
        </div>
    </div>

    <!-- Formulir Laporan -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                <form action="#" method="POST">
                    @csrf
                    
                    <!-- Kategori Kehilangan -->
                    <div class="mb-3">
                        <label for="kategori" class="form-label fw-semibold">Kategori Kehilangan</label>
                        <select class="form-select" id="kategori" required>
                            <option value="" selected disabled>Pilih kategori...</option>
                            <option value="hewan">Hewan Peliharaan (Kucing, Anjing, dll)</option>
                            <option value="barang">Barang Berharga (Dompet, HP, Kunci, dll)</option>
                            <option value="kendaraan">Kendaraan (Motor, Sepeda, dll)</option>
                        </select>
                    </div>

                    <!-- Nama Objek / Peliharaan -->
                    <div class="mb-3">
                        <label for="namaObjek" class="form-label fw-semibold">Nama / Ciri Utama Objek</label>
                        <input type="text" class="form-control" id="namaObjek" placeholder="Contoh: Kucing Anggora Berkalung Merah / Dompet Hitam Kulit" required>
                    </div>

                    <!-- Lokasi Terakhir -->
                    <div class="mb-3">
                        <label for="lokasi" class="form-label fw-semibold">Lokasi Terakhir Terlihat</label>
                        <input type="text" class="form-control" id="lokasi" placeholder="Contoh: Sekitar Jl. Soekarno Hatta, Malang" required>
                    </div>

                    <!-- Tanggal Kehilangan -->
                    <div class="mb-3">
                        <label for="tanggal" class="form-label fw-semibold">Tanggal Kejadian</label>
                        <input type="date" class="form-control" id="tanggal" required>
                    </div>

                    <!-- Deskripsi & Ciri Khusus -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi & Ciri-Ciri Khusus</label>
                        <textarea class="form-control" id="deskripsi" rows="4" placeholder="Jelaskan warna, ukuran, atau tanda khusus lainnya..." required></textarea>
                    </div>

                    <!-- Kontak yang Bisa Dihubungi -->
                    <div class="mb-4">
                        <label for="kontak" class="form-label fw-semibold">Nomor WhatsApp / Telepon Aktif</label>
                        <input type="tel" class="form-control" id="kontak" placeholder="Contoh: 081234567890" required>
                    </div>

                    <!-- Tombol Kirim -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg fw-semibold py-3 shadow-sm">
                            <i class="bi bi-send-fill me-2"></i> Kirim Laporan Sekarang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection