<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        /* 🎨 Tema Biru Dongker */
        body {
            background-color: #0a192f;
            color: #e6f1ff;
            font-family: 'Poppins', sans-serif;
        }

        /* 🌌 Kartu */
        .card {
            background-color: #112240;
            color: #ccd6f6;
            border: 1px solid #233554;
            border-radius: 12px;
        }

        /* 🩵 Tombol */
        .btn-primary {
            background-color: #0077b6;
            border: none;
        }
        .btn-primary:hover {
            background-color: #00b4d8;
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 180, 216, 0.4);
        }

        .btn-secondary {
            background-color: #495057;
            border: none;
        }
        .btn-secondary:hover {
            background-color: #6c757d;
        }

        /* 📋 Tabel */
        table {
            color: #e6f1ff;
        }
        thead {
            background-color: #0d3b66 !important;
        }
        tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.1);
            transition: 0.3s;
        }
        td, th {
            border-color: #233554 !important;
        }

        /* ✨ Animasi tombol */
        .animate-btn {
            transition: all 0.2s ease-in-out;
        }
        .animate-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(255,255,255,0.1);
        }

        /* 🌈 Judul Halaman */
        h1, h2, h3 {
            color: #64ffda;
        }

        /* 🧭 Navbar */
        .navbar {
            background-color: #0d1b2a !important;
            border-bottom: 2px solid #00b4d8;
        }
        .navbar-brand {
            color: #64ffda !important;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .nav-link {
            color: #e6f1ff !important;
            margin-right: 10px;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #64ffda !important;
            text-shadow: 0 0 6px #64ffda;
        }

        /* ⚓ Footer */
        footer {
            background-color: #0d1b2a !important;
            border-top: 2px solid #00b4d8;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    {{-- Navbar --}}
    @include('components.navbar')

    <main class="flex-grow-1 py-4 container">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- SweetAlert Notif --}}
    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session("success") }}',
                showConfirmButton: false,
                timer: 2000
            });
        @endif

        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session("error") }}',
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>
</html>
