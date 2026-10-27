@extends('layouts.app')

<title>@yield('title', 'Tentang Kami')</title>

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-8">
            <h1 class="fw-bold display-5 mb-3">Tentang Platform Kami</h1>
            <p class="text-muted lead">
                Kami berdedikasi untuk menyediakan solusi web yang cepat, responsif, dan mudah dikembangkan menggunakan teknologi modern seperti Laravel dan Bootstrap.
            </p>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="row align-items-center g-5 mb-5">
        <div class="col-lg-6">
            <div class="bg-primary bg-opacity-10 p-5 rounded-4 text-center text-primary fw-semibold" style="min-height: 320px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <i class="bi bi-code-slash display-1 mb-3"></i>
                <span class="fs-4">Clean & Modern Architecture</span>
            </div>
        </div>
        <div class="col-lg-6">
            <h3 class="fw-bold mb-3">Misi dan Visi Kami</h3>
            <p class="text-muted mb-3">
                Dalam era digital yang berkembang pesat, memiliki aplikasi web yang handal adalah kunci kesuksesan. Kami membangun platform ini untuk membantu pengembang maupun pengguna biasa dalam mengelola konten dengan antarmuka yang bersih dan intuitif.
            </p>
            <p class="text-muted mb-4">
                Setiap komponen dirancang dengan mengutamakan pengalaman pengguna (UX) yang optimal di berbagai perangkat, baik desktop maupun mobile.
            </p>
            <div class="d-flex gap-3">
                <a href="/home" class="btn btn-primary px-4 py-2">Kembali ke Beranda</a>
                <a href="/contact" class="btn btn-outline-secondary px-4 py-2">Hubungi Kami</a>
            </div>
        </div>
    </div>

    <!-- Team / Value Section -->
    <div class="row g-4 text-center pt-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white">
                <div class="text-primary fs-1 mb-3">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h5 class="fw-bold">Terpercaya & Aman</h5>
                <p class="text-muted small mb-0">Dibangun di atas fondasi framework Laravel yang terkenal dengan keamanan dan kestabilannya.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white">
                <div class="text-primary fs-1 mb-3">
                    <i class="bi bi-lightning-charge-fill"></i>
                </div>
                <h5 class="fw-bold">Performa Cepat</h5>
                <p class="text-muted small mb-0">Optimalisasi struktur kode memastikan muatan halaman terasa ringan dan responsif.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 p-4 h-100 bg-white">
                <div class="text-primary fs-1 mb-3">
                    <i class="bi bi-people-fill"></i>
                </div>
                <h5 class="fw-bold">Berorientasi Pengguna</h5>
                <p class="text-muted small mb-0">Desain antarmuka yang ramah pengguna memudahkan navigasi ke setiap menu yang tersedia.</p>
            </div>
        </div>
    </div>
</div>
@endsection