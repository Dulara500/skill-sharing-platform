<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSwap – Learn & Teach Together</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #050505;
            color: #ffffff;
        }

        /* Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background: rgb(255, 255, 255);
            position: sticky;
            top: 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            z-index: 10;
        }

        nav .logo {
            font-size: 24px;
            font-weight: bold;
            color: #4a6cf7;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        /* Hero section */
        .hero {
            position: relative;
            height: 45vh; /* full screen height */
            background-image: url("{{asset('images/background.jpg')}}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px;
            color: white;
        }

        /* Dark overlay */
        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5); /* adjust darkness */
            z-index: 1;
        }

        /* Make text appear above the overlay */
        .hero h1,
        .hero p {
            position: relative;
            z-index: 2;

        }
        .hero h1{
            font-size: 50px;
        }


        .btn {
            padding: 15px 30px;
            background: white;
            color: #4a6cf7;
            font-weight: bold;
            border-radius: 25px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background: #e9ecff;
        }

        /* About section */
        .about, .features {
            padding: 80px 20px;
            max-width: 1000px;
            margin: auto;
            text-align: center;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .feature-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .feature-box h3 {
            color: #4a6cf7;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background: #2b2c2c;
            color: white;
            margin-top: 40px;
        }

        /* Responsive */
        @media(max-width: 768px) {
            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    @include('layouts.navigation')

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="overlay"></div>
        <h1>Learn New Skills. Teach What You Know.</h1>
        <p>A community-driven skill exchange platform where users connect, share knowledge, and grow together.</p>
    </section>


    <!-- ABOUT SECTION -->
    <section id="about" class="about">
        <h2 class="fs-1">About SkillSwap</h2>
        <p class="fs-2">
            SkillSwap connects people who want to learn with those willing to teach.
            Users can create profiles, list skills, set learning goals, schedule sessions,
            and communicate using built-in messaging.
        </p>
    </section>

    <!-- FEATURES -->
    <section id="features" class="features">
        <h2>Platform Features</h2>

        <div class="features-grid">
            <div class="feature-box">
                <h3>Secure Login</h3>
                <p style="color: #050505">Authentication ensures all users are verified and safe.</p>
            </div>

            <div class="feature-box">
                <h3>Skill Matching</h3>
                <p style="color: #050505">Smart search matches learners with teachers instantly.</p>
            </div>

            <div class="feature-box">
                <h3>Messaging System</h3>
                <p style="color: #050505">Chat with other users to arrange classes or exchange ideas.</p>
            </div>
        </div>
    </section>

    <!-- JOIN SECTION -->
    <section id="join" class="about">
        <h2>Join the Community</h2>
        <p style="padding-bottom: 30px">Start learning or teaching today. It's free and open to everyone.</p>
        <a class="btn" href="{{route('register')}}">Create Account</a>
    </section>

    <!-- FOOTER -->
    <footer>
        © {{date('Y')}} SkillSwap • Learn • Teach • Grow</br>
        <i class="bi bi-facebook"></i>
        <i class="bi bi-twitter-x"></i>
        <i class="bi bi-instagram"></i>
    </footer>

</body>
</html>
