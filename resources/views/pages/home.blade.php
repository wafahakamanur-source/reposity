<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  <style>
    .body{
    min-height: 100vh;
    
    }

    .feature-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      border-radius: 12px;
    }
    .feature-card:hover{
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0,1) ;
    }
  </style>
</head>
<body style="min-height: 100vh;">
  @extends('layouts.app')

<title>@section('title', 'Beranda ')</title>

@section('content')
    <!-- Hero Section -->
     
<!-- Hero Section -->
<header class="hero-section">
    <div class="hero-overlay"></div>

    <div class="container hero-content text-center text-white">
        <h2 class="display-6 fw-bold mb-5" style="color: black;d">
            Selamat Datang! Mau Refreshing Ke Mana Nih?
        </h2>

        <p class="lead mb-4 mx-auto hero-description" style="color: black;">
            Selamat Datang di Surga Tersembunyi Banyuwangi 🌊🌿
            Nikmati ketenangan deburan ombak, birunya air yang jernih,
            dan hijaunya lanskap alam yang masih asri.
            Waktu terasa berjalan lebih lambat di sini,
            memberikanmu ruang terbaik untuk melepas penat
            dan menciptakan kenangan indah bersama alam.
        </p>

        <a href="/destinasi"
           class="btn btn-light btn-lg px-5 py-3 fw-semibold text-primary shadow">
            <i class="bi bi-compass me-2"></i>
            Cari Destinasi
        </a>
    </div>
</header>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Kenapa Harus Banyuwangi?</h2>
                <p class="text-muted">Bukan sekadar tempat pelarian, Banyuwangi adalah sebuah pengalaman magis di ujung timur Pulau Jawa yang merangkum keindahan alam Nusantara dalam satu kawasan.</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
             <div class="row">
    <!-- Card 1: Akses & Layanan Cepat -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card feature-card h-100 p-4 bg-white shadow-sm border-0 rounded-4">
            <div class="card-body">
                <div class="text-primary fs-1 mb-3">
                    <!-- Ikon Petir / Cepat -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
                        <path d="M11.251.068a.5.5 0 0 1 .227.58L9.67 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.33 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                    </svg>
                </div>
                <h4 class="card-title fw-bold mb-3">Akses & Perjalanan Mudah</h4>
                <p class="card-text text-muted">
                    Didukung bandara berkonsep hijau dan infrastruktur modern, liburan ke Banyuwangi jadi lebih praktis, cepat, dan nyaman tanpa ribet.
                </p>
            </div>
        </div>
    </div>

    <!-- Card 2: Keindahan Alam Lengkap -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card feature-card h-100 p-4 bg-white shadow-sm border-0 rounded-4">
            <div class="card-body">
                <div class="text-primary fs-1 mb-3">
                    <!-- Ikon Pohon / Alam -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-tree-fill" viewBox="0 0 16 16">
                        <path d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.033a.5.5 0 0 1-.416.767H11.5l1.551 2.327a.5.5 0 0 1-.416.773H10.5v1.5a.5.5 0 0 1-1 0v-1.5H7.5v1.5a.5.5 0 0 1-1 0v-1.5h-2.14a.5.5 0 0 1-.416-.773l1.55-2.327H4.494a.5.5 0 0 1-.416-.767L6.098 5.5H6a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0z"/>
                    </svg>
                </div>
                <h4 class="card-title fw-bold mb-3">Wisata Alam Super Lengkap</h4>
                <p class="card-text text-muted">
                    Dari savana eksotis ala Afrika, hutan purba, hingga pantai berselancar dunia, semua keindahan alam berkumpul jadi satu di sini.
                </p>
            </div>
        </div>
    </div>

    <!-- Card 3: Fenomena Unik Dunia -->
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card feature-card h-100 p-4 bg-white shadow-sm border-0 rounded-4">
            <div class="card-body">
                <div class="text-primary fs-1 mb-3">
                    <!-- Ikon Api / Blue Fire -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 3-1.25 3C10 5 10 0 6 0c1 2 1 4-2 6-1.5 1-2.5 3-2.5 5C1.5 14 4.686 16 8 16zm0-1c-1.657 0-3-1-3-2.5 0-.5.5-1.25 1-2 .5 1 .5 1 2 1 1.5 0 2-1 2-1 .5.75 1 1.5 1 2 0 1.5-1.343 2.5-3 2.5z"/>
                    </svg>
                </div>
                <h4 class="card-title fw-bold mb-3">Fenomena Blue Fire Langka</h4>
                <p class="card-text text-muted">
                    Saksikan langsung keajaiban kawah Gunung Ijen dengan api biru spektakuler yang hanya ada dua di seluruh dunia.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>