<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi page Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }
        navbar-custom{
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        navbar-custom .nav-link, .navbar-custom .nav-brand{
            color: #000; !important;
            font-weight: 600;
        }
        navbar-custom .nav-link:hover{
            color: #ffd700 !important;
        }
        hero-section {
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);
            padding: 50px;
            border-radius: 15px;
            color: #333;
        }
        .card-custom{
            border: none;
            border-radius: 12px;
            box-shadow: 135deg, #ff9a9e 0%, #fecfef 99%, #fecfef 100%;
        }
    </style>
</head>
<body>

<!--Navbar untuk berpindah-pindah halaman-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <!-- Brand / Logo -->
            <a class="navbar-brand fw-bold" href="/home">My<span style="color: #5f59ff;">Banyuwangi</span></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Bagian Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Gunakan "ms-auto" agar menu bergeser sepenuhnya ke kanan -->
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/home" style="color: #f4f7f6;">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/destinasi"  style="color: #f4f7f6;">Destinasi</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        @yield('content')
    </div>

    
    <div class="b-example-divider"></div> <br><br><hr>
    <div class="container">
      <footer class="py-3 my-4 sticky-bottom">
        <p class="text-center text-body-secondary">&copy; 2026 Company, Inc</p>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>