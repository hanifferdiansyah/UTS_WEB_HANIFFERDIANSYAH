<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    @extends('navbar')

    @section('content')

    <div class="back">
    <h1 class="text-center m-20 text-white">NOTIFIKASI</h1>

    <div class="container center col-4">
        <div class="card text-center mt-3">
            <div class="card-header text-start" style="font-size: 20pt">
                Member Hanif
            </div>
            <div class="card-body text-start">
                <p>lorem ipsum <i class="fa-solid fa-check ms-4"></i> </p>
                <p>lorem ipsum <i class="fa-solid fa-check ms-4"></i> </p>
                <p>lorem ipsum <i class="fa-solid fa-check ms-4"></i>  </p>
                <p>lorem ipsum <i class="fa-solid fa-check ms-4"></i>  </p>
                <p>lorem ipsum <i class="fa-solid fa-check ms-4"></i>  </p>

                <p class="text-center">Click <b>ACCEPT</b> untuk menerima member gym baru</p>

                <div class="text-center">
                    <button type="button" class="btn btn-primary"><a href="/member" class="text-decoration-none" style="color: white">ACCEPT</a></button>
                </div>

              </div>

        </div>
    </div>

    @endsection


    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
