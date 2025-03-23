<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf
                            <!-- Username Input -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="email" class="form-control" id="username" name="username" required placeholder="Enter your email">
                            </div>

                            <!-- Password Input -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
                            </div>

                            <!-- Submit Button -->
                            <div class="d-flex justify-content-center">
                                <a href="/" class="btn btn-primary"> Login </a>
                            </div>
                        </form>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
