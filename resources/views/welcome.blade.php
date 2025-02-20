<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WITI Student Management System</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .header {
            background-color: black;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header img {
            height: 50px;
            margin-left: 20px;
        }

        .search-bar {
            position: relative;
            margin-left: 60rem;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 40px 10px 15px;
            border: none;
            border-radius: 5px;
            outline: none;
        }

        .search-bar i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #800000;
            /* Maroon */
        }

        .main {
            text-align: center;
            padding: 50px 20px;
            background-color: #f7f7f7;
        }

        .main h1 {
            font-size: 3rem;
            color: #800000;
            /* Maroon */
            font-weight: bold;
            margin-bottom: 20px;
        }

        .main button {
            padding: 15px 30px;
            background-color: #800000;

            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .main button:hover {
            background-color: #5e0000;

        }

        .footer {
            background-color: #b3995d;
            padding: 20px 0;
            text-align: center;
            color: white;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .col-md-6 {
            flex: 1 1 45%;
            padding: 10px;
        }

        .col-md-6 p {
            line-height: 40px;
        }

        p {
            font-size: 1rem;
            color: white;
            text-align: left;
            margin-left: 120px;
        }

        .social-icons a {
            font-size: 20px;
            color: maroon;
            margin: 0 10px;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: maroon;
        }

        .main {
            position: relative;
            height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
            color: black;
        }

        .main {
            background-size: cover;
            background-position: center;
            animation: slideBackground 15s infinite;
            opacity: 100px;
            color: black;
        }

        @keyframes slideBackground {
            0% {
                background-image: url('https://witi.ac.ug/wp-content/uploads/2023/09/CLF_9627-scaled.jpg');
            }

            33% {
                background-image: url('https://pbs.twimg.com/media/Ga0M-33bwAAMWb2?format=jpg&name=4096x4096');
            }

            66% {
                background-image: url('https://studenthub.africa/app/uploads/news/5yyk8ji02Bf7sDdTFb2u9mpTpr5vPdBv.jpeg');
            }

            100% {
                background-image: url('https://media.licdn.com/dms/image/v2/D4D22AQG8qL-DfU9cRQ/feedshare-shrink_800/feedshare-shrink_800/0/1698225478715?e=2147483647&v=beta&t=hHM75VSmTROAlhwK_d2gz0lhNJGneSZ3Jol9fE5V5Q8');
            }
        }

        .main .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .main h1,
        .main button {
            position: relative;
            z-index: 2;
        }

        .main h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .main button {
            padding: 10px 20px;
            font-size: 18px;
            color: #fff;
            background-color: maroon;
            border: none;
            border-radius: 40px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .main button:hover {
            background-color: darkred;
            transform: scale(1.1);
        }

        h5 {
            color: white;
            margin-left: 20px;
        }

        .footer h4 {
            color: white;
            margin-bottom: 20px;
        }

        h6 {
            color: maroon;
        }
    </style>
</head>

<body>


    <div class="header">
        <img src="{{ asset('storage/images/try.png') }}" alt="logo">
        <div class="search-bar">
            <form action="index.php" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search for courses"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <div class="main">
        <h1>Welcome to WITI Student Management System</h1>
        <button onclick="window.location.href='{{ route('login') }}'">Login</button>
    </div>


    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>WITI Student Management System 2024</h4>
                    <p>
                        Plot 19 Bukoto street, Kamyokya road<br>
                        P.O Box 73307 Kampala Uganda<br>
                        Tel: +256-706-988-875, +256-708-809-4298<br>
                        Email: <a href="mailto:info@witi.ac.ug">info@witi.ac.ug</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <h4>Quick links</h4>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/company/witu/posts"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/witi_ug"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>


{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WITI Student Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @livewireStyles
    <style>
        /* Custom Styles */
        .navbar {
            background-color: #333;
        }

        .navbar .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-nav .nav-link:hover {
            color: #ddd;
        }

        .header {
            background-image: url('{{ asset(' storage/images/try.png') }}');
            background-size: cover;
            color: white;
            text-align: center;
            padding: 50px;
        }

        .header img {
            width: 200px;
            height: auto;
        }

        .main {
            text-align: center;
            margin-top: 30px;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 30px 0;
        }

        .footer h4,
        .footer p {
            margin: 0;
        }

        .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 20px;
        }

        .social-icons a:hover {
            color: #ddd;
        }

        .search-bar {
            margin-top: 20px;
        }

        .input-group {
            width: 50%;
            margin: auto;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">WITI Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('apply-now') }}">Apply now</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <div class="header">
        <img src="{{ asset('storage/images/try.png') }}" alt="WITI Logo">
        <h1>Welcome to WITI Student Management System</h1>
        <p>Your hub for managing student data and courses</p>

        <!-- Livewire Search Bar -->
        @livewire('search-bar')
    </div>

    <!-- Main Content Section -->
    <div class="main">
        <h1>Get Started with WITI</h1>
        <p>Login to access your dashboard or register to join our community of learners</p>
        <button onclick="window.location.href='{{ route('login') }}'" class="btn btn-primary">Login</button>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>WITI Student Management System 2024</h4>
                    <p>
                        Plot 19 Bukoto street, Kamyokya road<br>
                        P.O Box 73307 Kampala Uganda<br>
                        Tel: +256-706-988-875, +256-708-809-4298<br>
                        Email: <a href="mailto:info@witi.ac.ug">info@witi.ac.ug</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <h4>Quick links</h4>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/company/witu/posts"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/witi_ug"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> --}}