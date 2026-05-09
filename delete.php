<?php
session_start();
include 'includes/db_config.php';
if (isset($_SESSION['admin_logged_in']) && isset($_GET['nic'])) {
    $nic = $_GET['nic'];
    mysqli_query($conn, "DELETE FROM students WHERE nic='$nic'");
    header("Location: dashboard.php");
}
?>