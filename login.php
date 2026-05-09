<?php
session_start();
include 'includes/db_config.php';
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; 
    $password = $_POST['password'];
    
    // Fixed: Now uses the variables from the form to check against the database
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) { 
        $_SESSION['admin_logged_in'] = true; 
        header("Location: dashboard.php"); 
        exit();
    } else { 
        $error = "<div style='background:rgba(255,0,0,0.1); color:var(--brand-primary); padding:10px; border-radius:8px; margin-bottom:20px; text-align:center; font-weight:bold;'>Invalid Credentials</div>"; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Portal | NEXIS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<nav>
    <a href="index.php" class="nav-brand">
        <span class="nav-logo">NEXIS CAMPUS</span>
    </a>
    <div class="nav-links">
        <a href="index.php">Home</a>
    </div>
</nav>

<section class="form-hero animate-up" style="background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1920');">
    <div class="glass-panel" style="max-width: 450px;"> 
        <div style="text-align:center; margin-bottom:30px;">
            <i class="fas fa-user-shield" style="font-size: 3.5rem; color: var(--brand-primary); margin-bottom: 15px;"></i>
            <h2 style="font-size: 2rem; color: var(--brand-secondary);">Admin Access</h2>
            <p style="color: #666; font-size: 0.9rem;">Secure portal for faculty and staff.</p>
        </div>

        <?php echo $error; ?>

        <form method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter your admin ID" required>
            </div>
            
            <div class="form-group" style="margin-bottom: 35px;">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>
            
            <button type="submit" class="submit-btn">Authenticate</button>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>