<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/mainpage.css') }}">
    <title>SkillSwap – Learn & Teach Together</title>


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
    @include('layouts.footer')

</body>
</html>
