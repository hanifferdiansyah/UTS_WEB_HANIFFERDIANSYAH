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
    <div class="hero">
        <div class="hero-content">
            <div class="card-transparent mt-5 mx-5">
                <h1>SELAMAT DATANG ADMIN!</h1>
                <p><strong>Tanggal:</strong> <span id="date"></span></p>
            </div>
            <div class="mx-5 text-right">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function updateDate() {
            let now = new Date();
            let options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('date').innerText = now.toLocaleDateString('id-ID', options);
        }
        updateDate();
    </script>
    @endsection
</body>
</html>
