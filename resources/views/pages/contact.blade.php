@extends('layouts.app')

<title>@yield('title', 'Hubungi Kami')</title>

@section('content')

    <div class="container py-5">
        <h2 class="fw-bold mb-4">Hubungi Kami</h2>
        <p class="text-muted">Silakan isi formulir di bawah ini untuk mengirimkan pesan.</p>
        
        <!-- Form Kontak -->
        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>
@endsection