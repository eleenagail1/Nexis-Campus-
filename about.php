<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us | NEXIS CAMPUS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<nav>
    <a href="index.php" class="nav-brand">
        <img src="images/logo.jpg" alt="Nexis Logo">
        <span class="nav-logo">NEXIS CAMPUS</span>
    </a>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="about.php" class="active">About</a>
        <a href="courses.php">Courses</a>
        <a href="register.php">Apply Now</a>
    </div>
</nav>

<section class="hero animate-up" style="height: 60vh; background-image: url('https://images.unsplash.com/photo-1577412647305-991150c7d163?q=80&w=1920');">
    <div class="hero-content">
        <h1 style="font-size: 3.5rem;">Igniting Innovation.</h1>
        <p>Discover our history, our mission, and our commitment to educational excellence.</p>
    </div>
</section>

<div class="container animate-up delay-1" style="margin-top: -100px; position: relative; z-index: 10;">
    <div class="glass-panel" style="max-width: 100%; display: flex; gap: 40px; flex-wrap: wrap; background: white; padding: 60px;">
        <div style="flex: 1; min-width: 300px;">
            <h2 style="color: var(--brand-primary); margin-bottom: 20px; font-size: 2rem;">Our Mission</h2>
            <p style="text-align: justify; margin-bottom: 20px;">Established with the vision of bridging the gap between theoretical knowledge and practical application, Nexis Campus stands as a beacon of modern learning. We believe education must evolve as rapidly as the industries our students will enter.</p>
            <p style="text-align: justify;">We are proud to offer a dynamic campus life, supported by state-of-the-art facilities, dedicated career counseling, and a commitment to shaping the leaders of tomorrow.</p>
        </div>
        <div style="flex: 1; min-width: 300px;">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=800" alt="Students" style="width: 100%; border-radius: 15px; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>