@extends('layouts.app')

@section('title', 'Destinasi Wisata - My App')

@section('content')
<div class="container py-5">
    <!-- Bagian Header Judul -->
    <div class="row justify-content-center mb-5 text-center">
        <div class="col-lg-8">
            <h2 class="fw-bold display-6">Destinasi Wisata Pilihan</h2>
            <p class="text-muted">
                Temukan berbagai rekomendasi tempat wisata menarik lengkap dengan informasi dan panorama keindahannya.
            </p>
        </div>
    </div>

    <!-- Grid Kartu Destinasi Wisata -->
    <div class="row g-8">
        <!-- Wisata 1 -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden bg-white">
                <img src="https://kawanjelajahtour.com/wp-content/uploads/2023/03/Kawah-Ijen-Volcano_-The-Mount-Ijen-Crater-Lake-Blue-Fire-In-Banyuwangi-Indonesia.png" class="card-img-top object-fit-cover" style="height: 220px;" alt="Kawah Ijen">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="mb-2">
                        <span class="badge bg-success bg-opacity-10 text-success px-2 py-1 small fw-semibold">Pegunungan</span>
                    </div>
                    <h4 class="card-title fw-bold fs-5 mb-2">Kawah Ijen</h4>
                    <p class="card-text text-muted small mb-4 flex-grow-1">
                    Terkenal dengan fenomena blue fire (api biru) langka dan danau kawah hijau toska. Pendakian memakan waktu sekitar 1,5–2 jam.
                    </p>
                    <a href="https://www.google.com/maps/place/Gn.+Ijen/@-8.0588236,114.2527131,13z/data=!3m1!4b1!4m6!3m5!1s0x2dd149f2110ae607:0x7c04ef029d5e39bc!8m2!3d-8.0583811!4d114.243299!16zL20vMDR5ZjB6?entry=ttu&g_ep=EgoyMDI2MTAxNC4wIKXMDSoASAFQAw%3D%3D" class="btn btn-outline-primary btn-sm fw-semibold rounded-pill py-2">Lihat Detail Destinasi</a>
                </div>
            </div>
        </div>

        <!-- Wisata 2 -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden bg-white">
                <img src="https://asset.kompas.com/crops/KIUyem7BRobhdDRMNqCoOy6wmJg=/0x0:780x520/750x500/data/photo/2019/09/25/5d8b167b714d4.jpg" class="card-img-top object-fit-cover" style="height: 220px;" alt="De Djawatan">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="mb-2">
                        <span class="badge bg-success bg-opacity-10 text-success px-2 py-1 small fw-semibold">Hutan Lindung</span>
                    </div>
                    <h4 class="card-title fw-bold fs-5 mb-2">De Djawatan</h4>
                    <p class="card-text text-muted small mb-4 flex-grow-1">
                        Hutan lindung dengan deretan pohon trembesi raksasa yang memberikan suasana ala film fantasi.
                    </p>
                    <a href="https://www.google.com/maps?sca_esv=c9b655d7b11e91c2&biw=500&bih=628&output=search&q=foto+de+djawatan+banyuwangi+maps&source=lnms&fbs=ABfTbFWdsmmmhjl_BDjuxsGOJsG5PeIotS9Fo4zjKe5Cdzohrq43nq9ztrMjX4sAfAfdKsvnXe_CseQteRW7CP2wfjJyZjM1VgNdC2eayekjgUS2gGLpXY7gOeWwnEIcN8RFUypvAK6f5WtI85L8u2cD_US8C63cDpMW_f52eIf3IXlNLroDdsFtP8F-r9CpxZY_3ghedPk3pjV9PcWwSjvw6UuNo5-H0xBboVBwdDiTSzLcZEWAilM&entry=mc&ved=1t:200715&ictx=111" class="btn btn-outline-primary btn-sm fw-semibold rounded-pill py-2">Lihat Detail Destinasi</a>
                </div>
            </div>
        </div>

        <!-- Wisata 3 -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden bg-white">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI60HPp8to2ymH7eFOAuYtlPnLoK0HztASWKVjBQgljXHt1HVnVBjPvVDq&s=10" class="card-img-top object-fit-cover" style="height: 220px;" alt="Taman Nasional Baluran">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="mb-2">
                        <span class="badge bg-success bg-opacity-10 text-success px-2 py-1 small fw-semibold">Sabana</span>
                    </div>
                    <h4 class="card-title fw-bold fs-5 mb-2">Taman Nasional Baluran</h4>
                    <p class="card-text text-muted small mb-4 flex-grow-1">
                    Sering disebut sebagai "Africa van Java" karena memiliki savana luas dan habitat satwa liar.
                    </p>
                    <a href="https://www.google.com/maps/search/taman+nasional+baluran/@-7.8761884,114.3462265,13z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI2MTAxNC4wIKXMDSoASAFQAw%3D%3D" class="btn btn-outline-primary btn-sm fw-semibold rounded-pill py-2">Lihat Detail Destinasi</a>
                </div>
            </div>
        </div>

         <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden bg-white">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmU4BH_RhG4o5L6lihhQKu7P9A-emrtPFwYvSu3u2r3xkaQ9QuIlPMPxGK&s=10" class="card-img-top object-fit-cover" style="height: 220px;" alt="Teluk Hijau">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="mb-2">
                        <span class="badge bg-success bg-opacity-10 text-success px-2 py-1 small fw-semibold">Pantai</span>
                    </div>
                    <h4 class="card-title fw-bold fs-5 mb-2">Teluk Hijau</h4>
                    <p class="card-text text-muted small mb-4 flex-grow-1">
                     Salah satu pantai dengan ombak terbaik dunia untuk olahraga selancar (surfing).
                    </p>
                    <a href="https://www.google.com/maps/place/Teluk+Hijau/@-8.5706286,113.9236001,13.87z/data=!4m6!3m5!1s0x2dd41a974a55efa3:0xbd852947e89bba9e!8m2!3d-8.5635465!4d113.9239892!16s%2Fg%2F11bbqsbx61!5m1!1e4?entry=ttu&g_ep=EgoyMDI2MTAxNC4wIKXMDSoASAFQAw%3D%3D" class="btn btn-outline-primary btn-sm fw-semibold rounded-pill py-2">Lihat Detail Destinasi</a>
                </div>
            </div>
        </div>


         <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden bg-white">
                <img src="https://www.yukbanyuwangi.co.id/wp-content/uploads/2025/02/rei-Sehari-Pulau-Merah-Dikunjungi-500-Orang-Selama-Liburan-2493065719.webp" class="card-img-top object-fit-cover" style="height: 220px;" alt="Teluk Hijau">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="mb-2">
                        <span class="badge bg-success bg-opacity-10 text-success px-2 py-1 small fw-semibold">Pantai</span>
                    </div>
                    <h4 class="card-title fw-bold fs-5 mb-2">Pulau Merah</h4>
                    <p class="card-text text-muted small mb-4 flex-grow-1">
                     Pantai berpasir putih dengan bukit kecil di tengah laut yang menjadi spot favorit untuk berselancar dan melihat matahari terbenam.
                    </p>
                    <a href="https://www.google.com/maps?sca_esv=c9b655d7b11e91c2&biw=526&bih=695&output=search&q=pantai+pulau+merah&source=lnms&fbs=ABfTbFUi2Y3dK1t42wFfoA7wrYdUQapMXZWA9EsT7MEnYYNqHg3hhXxJ863hA_AtDbQmaTTVJOsyYGs7AUfUYBSBqCOY-9tq_ubPvezDqLhzgA7RcskwsSI2CksNVEaiulX0BL8Pemgx_75s4M64MZi44470CyaXSIC2SoWsGTnaCRikmYXkL8xbrGkXXEVli1d2Z-IuFxtfaMt_iKwryyZFYO_UHRa3TAt-Oe1s1DizWltKc98X8Rw&entry=mc&ved=1t:200715&ictx=111" class="btn btn-outline-primary btn-sm fw-semibold rounded-pill py-2">Lihat Detail Destinasi</a>
                </div>
            </div>
        </div>

         <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden bg-white">
                <img src="https://asset.kompas.com/crops/ouVIbBbgrJivJvsw6MSIq0Ww884=/0x0:1024x683/1200x800/data/photo/2022/05/29/62934b49f3b6b.jpeg" class="card-img-top object-fit-cover" style="height: 220px;" alt="Kota Tua">
                <div class="card-body p-4 d-flex flex-column">
                    <div class="mb-2">
                        <span class="badge bg-success bg-opacity-10 text-success px-2 py-1 small fw-semibold">Pantai</span>
                    </div>
                    <h4 class="card-title fw-bold fs-5 mb-2">Pantai Plengkung</h4>
                    <p class="card-text text-muted small mb-4 flex-grow-1">
                         Dikenal sebagai G-Land karena bentuk pantainya dari ketinggian menyerupai huruf G terbalik dan teluknya yang menghadap Samudra Hindia
                    </p>
                    <a href="https://www.google.com/maps?sca_esv=c9b655d7b11e91c2&biw=500&bih=628&output=search&q=pantai+plengkung+banyuwangi&source=lnms&fbs=ABfTbFWRp1Fxrl7GMVACISk20Ky3fWf8VFY44e-gettSOHdS3ezBOCe_npMEMrBVdAvBVZmK7lBQyaAUvQMKkIjH3UDpi8BZq5C1-Q5Xq5dYpHwh3vGZjSB2ny69ML7BJXeXeoBr5OjqALWETffAk4xsimUwSBUXdTG3G8eE8c0FCy3Hr_yFyx0o4JHVmtYgJpWxAouZSuoSOVdJ6Iql6EMBUzQiZkSCy-N2fxAimMLwmiY_A53krMI&entry=mc&ved=1t:200715&ictx=111" class="btn btn-outline-primary btn-sm fw-semibold rounded-pill py-2">Lihat Detail Destinasi</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection