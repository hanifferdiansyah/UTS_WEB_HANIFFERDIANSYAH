<!-- resources/views/layouts/navbar.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Sidebar Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body, html {
            width: 100%;
            height: 100%;
        }
        .back {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset('/image/y.jpg') }}') no-repeat center center/cover;
        }
        .hero {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: url('{{ asset('/image/y.jpg') }}') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: right;
            text-align: right;
            color: white;
        }
        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 1, 0.5); /* Overlay untuk meningkatkan kontras */
        }
        .hero-content {
            position: relative;
            z-index: 1;
            padding: 20px;
        }
        .card-transparent {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
    </style>

<body>


    <nav class="fixed-top bg-yellow-800 p-3">
        <div class="container mx-auto flex justify-between items-center">
            <p style="color: white; font-size: 15pt">ADMIN</p>
            <ul class="flex space-x-4">
                <li><a href="/" class="text-gray-300 hover:text-white text-decoration-none">Home</a></li>
                <li><a href="/laporan" class="text-gray-300 hover:text-white text-decoration-none">Laporan</a></li>
                <li><a href="/notifmasuk" class="text-gray-300 hover:text-white text-decoration-none">Notifikasi</a></li>
                <li><a href="/login" class="text-gray-300 hover:text-white text-decoration-none">Log Out</a></li>
            </ul>
        </div>
    </nav>


    <footer class="fixed-bottom bg-yellow-800 text-white py-2 text-center">
        Copyright &copy; Hanif Ferdiansyah - 2025
    </footer>



    <div class="p-10 w-full">
        @yield('content')
    </div>

    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
