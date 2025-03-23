<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>

<body>
    @extends('navbar')

    @section('content')

    <div class="back">
        <h1 class="m-20 text-center text-white">LAPORAN</h1>

        <div class="text-center">
            <button type="button" class="btn btn-secondary m-5 btn-lg w-50"><a href="/alat" class="text-decoration-none" style="color: white">ALAT</a></button>
        </div>

        <div class="text-center">
            <button type="button" class="btn btn-secondary m-5 btn-lg w-50"><a href="/member" class="text-decoration-none" style="color: white">MEMBER</a></button>
        </div>

        <div class="text-center">
            <button type="button" class="btn btn-secondary m-5 btn-lg w-50"><a href="/keuangan" class="text-decoration-none" style="color: white">KEUANGAN </a></button>
        </div>
    </div>
    @endsection

</body>

</html>
