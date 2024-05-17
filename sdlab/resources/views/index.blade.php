<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PUAIS - Home</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333333 !important; /* Changed navbar background color to matte black */
        }

        .navbar-brand,
        .nav-link {
            color: #ffffff !important;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
            background-color: #f8f9fa;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #0044cc, #ff5733, #ffbb00); /* Gradient with professional colors */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 600; /* Slightly bold */
        }

        p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .signup-section {
            margin-top: 40px;
        }

        .signup-section h2 {
            color: #343a40;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 0.25rem;
            border: 1px solid #ced4da;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        footer {
            margin-top: 50px;
            text-align: center;
            color: #6c757d;
            font-size: 0.9em;
        }

        .card {
            margin-bottom: 20px;
        }

        .card-body {
            padding: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PUAIS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <h1><b>Welcome to <span style="color: #0044cc;">P<span style="color: #ff5733;">U</span>A<span style="color: #ffbb00;">I</span>S</span></b></h1>
                <p>We're excited to have you here. Explore and enjoy!</p>
            </div>
        </div>
        <div class="signup-section">
            <div class="card">
                <div class="card-body">
                    <h2>Sign Up</h2>
                    <form action="signup_process.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; <script>document.write(new Date().getFullYear());</script> PREMIER UNIVERSITY</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmu
