<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WITI Student Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .header {
            background-color: black;
            /* Maroon */
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
            /* flex: 1; */
            margin-left: 20px;
            position: relative;
            margin-left: 60rem
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
            font-size: 1rem;
            color: #800000;
            /* Maroon */
            margin-bottom: 10px;
            font-weight: bold;


        }

        .main button {
            padding: 15px 30px;
            background-color: #800000;
            /* Maroon */
            color: #fff;
            border: none;
            border-radius: 10px;

            font-size: 1.5rem;
            cursor: pointer;
        }

        .main button:hover {
            background-color: #5e0000;
            /* Darker Maroon */
        }

        /* hey */

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
            /* Distribute space evenly between the columns */
            align-items: center;
            /* Vertically center the columns */
            flex-wrap: wrap;
            /* Ensure it wraps in smaller screens */
        }

        .col-md-6 {
            flex: 1 1 45%;
            /* Allow both columns to take up equal space */
            padding: 10px;
        }

        h4 {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        .col-md-6 p {
            line-height: 40px
        }

        p {
            font-size: 1rem;
            color: white;
            text-align: left;

            margin-left: 120px
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

        /* h6 {
    font-size: 14px;
    margin-top: 20px;
    color: #777;
} */

        marquee {
            color: maroon;
        }


        /* .footer small {
            display: block;
            text-align: center;
            color: #aaa;
            margin-top: 20px;
        } */
        /* Styling for the main section */
        .main {
            position: relative;
            height: 80vh;
            /* Full-screen height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            overflow: hidden;
            color: black;
            /* White text for contrast */
        }

        /* Add a sliding background */
        .main {
            background-size: cover;
            background-position: center;
            animation: slideBackground 15s infinite;
            opacity: 100px;
            color: black;

        }

        /* Keyframes for the sliding effect */
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

            66% {
                background-image: url('https://pbs.twimg.com/media/Ga0M-33bwAAMWb2?format=jpg&name=4096x4096');
            }

            100% {
                background-image: url('https://witi.ac.ug/wp-content/uploads/2023/09/CLF_9627-scaled.jpg');
            }

            /* 33% { background-image: url('https://witi.ac.ug/wp-content/uploads/2022/12/graduate_1023x699.jpeg'); }
    66% { background-image: url('https://studenthub.africa/app/uploads/news/5yyk8ji02Bf7sDdTFb2u9mpTpr5vPdBv.jpeg'); }
    100% { background-image: url('https://media.licdn.com/dms/image/v2/D4D22AQG8qL-DfU9cRQ/feedshare-shrink_800/feedshare-shrink_800/0/1698225478715?e=2147483647&v=beta&t=hHM75VSmTROAlhwK_d2gz0lhNJGneSZ3Jol9fE5V5Q8'); } */
        }

        /* Overlay for better text visibility */
        .main .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;

        }


        /* Styling the content */
        .main h1,
        .main button {
            position: relative;
            /* Make text appear above the overlay */
            z-index: 2;
        }

        .main h1 {
            font-size: 3rem;
            /* Adjust font size for heading */
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
            margin-left: 20px
        }

        .home {
            /* margin-left:10rem */
        }

        .main h1 {
            overflow: hidden;
            /* Ensures the content is clipped */
            border-right: 2px solid black;
            /* Creates the cursor effect */
            white-space: nowrap;
            /* Prevents text from wrapping */
            margin: 0 auto;
            /* Centers the text */
            letter-spacing: 2px;
            /* Adjusts spacing between letters */
            animation: typing 9s steps(30, end), blink-caret 0.5s step-end infinite, removing 9s steps(30, end) infinite;
        }

        /* Typing effect */
        @keyframes typing {
            0% {
                width: 0;
            }

            50% {
                width: 100%;
            }

            100% {
                width: 0;
            }
        }

        /* Blinking caret */
        @keyframes blink-caret {

            0%,
            100% {
                border-color: transparent;
            }

            50% {
                border-color: black;
            }
        }

        /* Removing text effect */
        @keyframes removing {
            0% {
                width: 100%;
            }

            50% {
                width: 0%;
            }

            100% {
                width: 100%;
            }
        }

        .main button {
            margin-bottom: 200px;
            margin-top: 40px;
        }

        /* .col-md-6 h4{
    margin-left:30px;
} */
        h6 {
            color: maroon;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <div class="header">
        <img src="{{ asset('storage/images/try.png') }}" alt="logo">


        {{-- <img src="" alt=""> --}}
        {{-- <div>
            <a href="{{ url('/') }}" class="home">Home</a>
        </div>
        --}}
        {{-- <div class="search-bar">
            <input type="text" placeholder="Search for courses">
            <i class="fas fa-search"></i>
        </div> --}}
        <div class="search-bar">
            <form action="index.php" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search for courses"
                        value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>

        <div>

        </div>
    </div>

    <!-- Main Section -->
    <a href="{{ url('/') }}" class="small-sidebar-text"></a>
    <div class="main">
        <h1>Welcome to WITI Student Management System</h1>
        <button onclick="window.location.href='{{ route('login') }}'">Login</button>
    </div>




    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>WITI Student Management System 2024</h4>
                    <p>
                        Plot 19 Bukoto street, Kamyokya road<br>
                        P.O Box 73307 Kampala Uganda<br>
                        Tel: +256-706-988-875, +256-708-809-4298<br>
                        Email: <a href="mailto:info@witi.ac.ug">info@witi.ac.ug'</a>
                    </p>
                </div>

                <div class="col-md-6">
                    <h4 style="margin-bottom: 120px; margin-left:20px;">Quick links</h4><br>
                    {{-- <p>
                        Email: <a href="mailto:info@witi.ac.ug">info@witi.ac.ug'</a>
                    </p> --}}
                    <div class="social-icons">

                        <a
                            href="https://www.linkedin.com/company/witu/posts?lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3B2P%2F6simATMmm%2BJGKdxQYWA%3D%3D"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/witi_ug"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            {{-- <div class="row text-center">
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div> --}}
            <h6>
                <marquee>All copyrights reserved 2024</marquee>
            </h6>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
</body>

</html>