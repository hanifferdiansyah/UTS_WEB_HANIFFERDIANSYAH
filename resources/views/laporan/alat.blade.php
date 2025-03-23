<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <title>Document</title>
</head>
<body>



    <div class="container-fluid p-3 mt-3">
        <div class="d-flex align-items-center">
            <a href="/laporan" class="btn btn-outline-primary mx-5"><i class="fa-solid fa-backward"></i></a>
            <h2 class="text-center flex-grow-1 m-0">LAPORAN ALAT</h2>
            <div class="me-auto"></div> <!-- Spacer untuk posisi seimbang -->
        </div>
    </div>

    <!-- Card Grid 2x2 Berada di Tengah -->
    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Baris Pertama -->
                <div class="col-md-5 m-2">
                    <div class="card text-center p-3">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Alat</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 m-2">
                    <div class="card text-center p-3">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Alat</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Baris Kedua -->
                <div class="col-md-5 m-2">
                    <div class="card text-center p-3">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Alat</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 m-2">
                    <div class="card text-center p-3">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Alat</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        {{-- <ol>
            <li>halooo</li>
            <li>saya</li>
        </ol>
    </div>

    <div class="container colls-1 row-2">
        <ol>
            <li>halooo</li>
            <li>saya</li>
        </ol> --}}


        <script src="{{asset('js/all.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
