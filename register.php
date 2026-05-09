<?php include 'includes/db_config.php'; $msg = ""; /* Your existing PHP insert logic remains exactly the same here */ ?>
<!DOCTYPE html>
<html>
<head>
    <title>Apply Now | NEXIS CAMPUS</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav>
    <a href="index.php" class="nav-brand">
        <img src="images/logo.jpg" alt="Nexis Logo">
        <span class="nav-logo">NEXIS CAMPUS</span>
    </a>
    <div class="nav-links"><a href="index.php">Home</a><a href="courses.php">Courses</a><a href="register.php" class="active">Apply Now</a></div>
</nav>

<section class="form-hero animate-up">
    <div class="glass-panel">
        <h2 style="font-size:2.5rem; color:var(--brand-primary); margin-bottom:10px; text-align:center;">Student Admissions</h2>
        <p style="text-align:center; margin-bottom:30px; color:#555;">Fill out the form below to begin your journey.</p>
        
        <?php echo $msg; ?>
        
        <form method="POST">
            <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                <div class="form-group" style="flex: 1; min-width: 250px;"><label>NIC Number (ID)*</label><input type="text" name="nic" class="form-control" required></div>
                <div class="form-group" style="flex: 1; min-width: 250px;"><label>Full Name</label><input type="text" name="name" class="form-control" required></div>
            </div>
            
            <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                <div class="form-group" style="flex: 1;"><label>Email</label><input type="email" name="email" class="form-control" required></div>
                <div class="form-group" style="flex: 1;"><label>Contact Number</label><input type="text" name="contact" class="form-control" required></div>
            </div>

            <div class="form-group"><label>Home Address</label><input type="text" name="address" class="form-control" required></div>
            <div class="form-group"><label>Gender</label>
                <select name="gender" class="form-control" required><option value="Male">Male</option><option value="Female">Female</option></select>
            </div>
            
            <div class="form-group"><label>Select Your Academic Program</label>
                <select name="course" class="form-control" required>
                    <optgroup label="Diploma Programs">
                        <option value="Higher Diploma in Business Management">Higher Diploma in Business Management</option>
                        <option value="Higher Diploma in English">Higher Diploma in English</option>
                        <option value="Higher Diploma in Human Resource Management">Higher Diploma in Human Resource Management</option>
                        <option value="Higher Diploma in Information Technology">Higher Diploma in Information Technology</option>
                    </optgroup>
                    <optgroup label="Undergraduate Programs">
                        <option value="B.Sc. (Hons) Business and Management">B.Sc. (Hons) Business and Management</option>
                        <option value="BA (Hons) English">BA (Hons) English</option>
                        <option value="B.Sc. (Honors) IT in Cyber Security">Bachelor of Science (Honors) Information Technology in Cyber Security</option>
                        <option value="B.Sc. (Honours) in Software Engineering">Bachelor of Science (Honours) in Software Engineering</option>
                        <option value="BSc (Hons) Business Information Systems">BSc (Hons) Business Information Systems</option>
                        <option value="BSc (Hons) Civil Engineering">BSc (Hons) Civil Engineering</option>
                    </optgroup>
                    <optgroup label="Postgraduate Programs">
                        <option value="Master of Business Administration">Master of Business Administration</option>
                        <option value="MSc Information Technology">MSc Information Technology</option>
                        <option value="Master of Science Management in Construction">Master of Science Management in Construction</option>
                    </optgroup>
                </select>
            </div>
            
            <button type="submit" class="submit-btn">Submit Application Form</button>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>