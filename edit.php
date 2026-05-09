<?php
session_start();
include 'includes/db_config.php';
if (!isset($_SESSION['admin_logged_in'])) { header("Location: login.php"); exit(); }

$nic = $_GET['nic'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    
    // Fixed: Column name updated to 'fullname' to match your fetch logic
    $sql = "UPDATE students SET fullname='$name', address='$address', contact='$contact' WHERE nic='$nic'";
    if (mysqli_query($conn, $sql)) { header("Location: dashboard.php"); exit(); }
}

$result = mysqli_query($conn, "SELECT * FROM students WHERE nic='$nic'");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head><title>Update | Nexis</title><link rel="stylesheet" href="css/style.css"></head>
<body>
<div class="container">
    <div class="form-box">
        <h2>Update Record for NIC: <?php echo $nic; ?></h2><br>
        <form method="POST">
            <div class="form-group"><label>Name</label><input type="text" name="name" class="form-control" value="<?php echo $row['fullname']; ?>"></div>
            <div class="form-group"><label>Address</label><textarea name="address" class="form-control"><?php echo $row['address']; ?></textarea></div>
            <div class="form-group"><label>Contact</label><input type="text" name="contact" class="form-control" value="<?php echo $row['contact']; ?>"></div>
            <button type="submit" class="submit-btn">Update Details</button>
        </form>
    </div>
</div>
</body>
</html>