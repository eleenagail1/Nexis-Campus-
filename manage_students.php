<?php include 'includes/db_config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Students | Nexis Campus</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<nav>
    <a href="index.php" class="nav-brand">
        <img src="images/logo.jpg" alt="Nexis Logo">
        <span class="nav-logo">NEXIS CAMPUS</span>
    </a>
</nav>

<section class="form-wrapper" style="padding-top: 50px; flex-direction: column;">
    <div class="section-title">
        <h2 style="color: var(--brand-dark);">Student Administration</h2>
    </div>

    <div class="container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-top: 0;">
        
        <div class="form-box" style="max-width: 100%;">
            <h3 style="color: var(--brand-red); margin-bottom: 20px;"><i class="fas fa-search"></i> Search & Update</h3>
            <form method="POST" action="">
                <div class="form-group">
                    <label>Enter Student NIC</label>
                    <div style="display: flex; gap: 10px;">
                        <input type="text" name="nic_search" class="form-control" placeholder="e.g. 200012345678" required>
                        <button type="submit" name="search" class="submit-btn" style="width: auto; padding: 0 30px;">Find</button>
                    </div>
                </div>
            </form>

            <?php
            if(isset($_POST['search'])) {
                $nic = $_POST['nic_search'];
                $query = mysqli_query($conn, "SELECT * FROM students WHERE nic='$nic'");
                if($row = mysqli_fetch_array($query)) {
                    ?>
                    <hr style="margin: 30px 0; border: 0; border-top: 1px solid #eee;">
                    <form method="POST" action="update_logic.php">
                        <input type="hidden" name="old_nic" value="<?php echo $row['nic']; ?>">
                        <div class="course-grid" style="grid-template-columns: 1fr 1fr; gap: 15px;">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                            </div>
                        </div>
                        <button type="submit" name="update" class="submit-btn" style="background: var(--gold); color: var(--brand-dark);">Update Information</button>
                    </form>
                    <?php
                } else {
                    echo "<p style='color: var(--brand-red); margin-top: 20px;'>No student found with that NIC.</p>";
                }
            }
            ?>
        </div>

        <div class="form-box" style="max-width: 100%; border-top: 5px solid var(--brand-red);">
            <h3 style="color: var(--brand-red); margin-bottom: 20px;"><i class="fas fa-user-minus"></i> Danger Zone</h3>
            <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">To remove a student permanently, enter the NIC below. This action cannot be undone.</p>
            <form method="POST" action="delete_logic.php" onsubmit="return confirm('Are you absolutely sure?');">
                <div class="form-group">
                    <label>Confirm Student NIC</label>
                    <input type="text" name="nic_delete" class="form-control" placeholder="Verification Required" required>
                </div>
                <button type="submit" name="delete" class="submit-btn" style="background: #333;">Delete Student Record</button>
            </form>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>