<?php
session_start();
include 'includes/db_config.php';

// Security check: Redirect if not logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Nexis Campus</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th, td { padding: 15px; border-bottom: 1px solid #eee; text-align: left; }
        th { background: var(--brand-primary); color: white; }
        .action-btns a { margin-right: 10px; text-decoration: none; }
        .edit-link { color: #2ecc71; }
        .delete-link { color: #e74c3c; }
    </style>
</head>
<body>

<nav>
    <a href="index.php" class="nav-brand">
        <span class="nav-logo">NEXIS CAMPUS - ADMIN</span>
    </a>
    <div class="nav-links">
        <a href="manage_students.php">Search/Delete</a>
        <a href="logout.php" style="color: var(--brand-red);">Logout</a>
    </div>
</nav>

<div class="container animate-up" style="padding-top: 50px;">
    <h2 class="section-title">Registered Students</h2>
    
    <table>
        <thead>
            <tr>
                <th>NIC</th>
                <th>Full Name</th>
                <th>Course</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['nic']; ?></td>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td class="action-btns">
                    <a href="edit.php?nic=<?php echo $row['nic']; ?>" class="edit-link"><i class="fas fa-edit"></i> Edit</a>
                    <a href="delete.php?nic=<?php echo $row['nic']; ?>" class="delete-link" onclick="return confirm('Delete this record?')"><i class="fas fa-trash"></i> Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>