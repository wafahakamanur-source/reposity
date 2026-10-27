@extends('layouts.app')

<title>@yield('title', 'Dashboard')</title>

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <h2 class="fw-bold mb-1">Dashboard</h2>
            <p class="text-muted">Selamat datang di halaman dashboard aplikasi Anda.</p>
        </div>
    </div>

    <!-- Statistik / Ringkasan Kotak -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-4 bg-primary text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white-50 mb-1">Total Pengguna</h6>
                        <h3 class="fw-bold mb-0">1,245</h3>
                    </div>
                    <div class="fs-1 opacity-75">
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-4 bg-success text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white-50 mb-1">Pesan Masuk</h6>
                        <h3 class="fw-bold mb-0">328</h3>
                    </div>
                    <div class="fs-1 opacity-75">
                        <i class="bi bi-chat-dots-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-4 bg-dark text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white-50 mb-1">Status Sistem</h6>
                        <h3 class="fw-bold mb-0">Aktif</h3>
                    </div>
                    <div class="fs-1 opacity-75">
                        <i class="bi bi-shield-check"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian Konten Utama / Tabel Contoh -->
    <div class="card border-0 shadow-sm rounded-4 p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold fs-5 mb-0">Aktivitas Terbaru</h4>
            <button class="btn btn-outline-primary btn-sm">Lihat Semua</button>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aktivitas</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="fw-semibold">Budi Santoso</td>
                        <td>Mengirim pesan kontak</td>
                        <td>Baru saja</td>
                        <td><span class="badge bg-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="fw-semibold">Siti Rahma</td>
                        <td>Memperbarui profil</td>
                        <td>10 menit lalu</td>
                        <td><span class="badge bg-primary">Proses</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="fw-semibold">Ahmad Fauzi</td>
                        <td>Mendaftar akun baru</td>
                        <td>1 jam lalu</td>
                        <td><span class="badge bg-success">Selesai</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection