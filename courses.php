<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Academic Programs | NEXIS CAMPUS</title>
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
        <a href="about.php">About</a>
        <a href="courses.php" class="active">Courses</a>
        <a href="register.php">Apply Now</a>
        <a href="login.php">Admin Portal</a>
    </div>
</nav>

<section class="hero animate-up" style="height: 50vh; background-image: url('https://images.unsplash.com/photo-1532012197267-da84d127e765?q=80&w=1920');">
    <div class="hero-content">
        <h1 style="font-size: 3.5rem;">Academic Programs</h1>
        <p>Discover pathways designed to build leaders and innovators.</p>
    </div>
</section>

<div class="container animate-up delay-1">
    <div class="grid-3">
        
        <div class="card">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=800" alt="Diploma Students" class="card-img">
            <div class="card-body">
                <h3>Diploma Level</h3>
                <ul>
                    <li>Higher Diploma in Business Management</li>
                    <li>Higher Diploma in English</li>
                    <li>Higher Diploma in Human Resource Management</li>
                    <li>Higher Diploma in Information Technology</li>
                </ul>
            </div>
        </div>

        <div class="card animate-up delay-2">
            <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=800" alt="Undergraduate" class="card-img">
            <div class="card-body">
                <h3>Undergraduate</h3>
                <ul>
                    <li>B.Sc. (Hons) Business and Management</li>
                    <li>BA (Hons) English</li>
                    <li>Bachelor of Science (Honors) Information Technology in Cyber Security</li>
                    <li>Bachelor of Science (Honours) in Software Engineering</li>
                    <li>BSc (Hons) Business Information Systems</li>
                    <li>BSc (Hons) Civil Engineering</li>
                </ul>
            </div>
        </div>

        <div class="card animate-up delay-1">
            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=800" alt="Postgraduate" class="card-img">
            <div class="card-body">
                <h3>Postgraduate</h3>
                <ul>
                    <li>Master of Business Administration</li>
                    <li>MSc Information Technology</li>
                    <li>Master of Science Management in Construction</li>
                </ul>
            </div>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>