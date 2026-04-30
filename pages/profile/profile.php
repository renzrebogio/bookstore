<?php
require_once '../../include/config.php';
require_once '../../include/auth_checker.php';

// Placeholder user data - in a real app, this would come from the database
$user = [
    'name' => 'Sebastino De Cavite',
    'student_id' => '2023-10452',
    'course' => 'BS Computer Science',
    'email' => 'sebastino@sscr.edu.ph',
    'joined' => 'January 2024'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../component/navbar/navbar.css">
    <link rel="stylesheet" href="../../component/footer/footer.css">
    <link rel="stylesheet" href="profile.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <title>User Profile | SSCR-C Bookstore</title>
</head>
<body>
    <?php include '../../component/navbar/navbar.php' ?>

    <main class="profile-container">
        <header class="profile-header" style="background-image: url('../../src/admin_banner.jpg'); background-size: cover; background-position: center;">
            <div class="header-overlay"></div>
            <div class="profile-main-info">
                <div class="user-titles">
                    <h1 style="text-shadow: 2px 2px 15px rgba(0,0,0,0.9);"><?php echo 'User Account'; ?> <span style="color: var(--gold); text-shadow: 2px 2px 15px rgba(0,0,0,0.9);">Management</span></h1>
                    <p class="student-id" style="text-shadow: 1px 1px 10px rgba(0,0,0,0.9);">Admin Control Panel</p>
                </div>
            </div>
        </header>

        <!-- Stats Overview -->
        <div class="stats-grid">
            <div class="stat-card">
                <span class="material-icons-outlined">people</span>
                <div>
                    <h3>1,248</h3>
                    <p>Total Registered</p>
                </div>
            </div>
            <div class="stat-card">
                <span class="material-icons-outlined">verified_user</span>
                <div>
                    <h3>1,120</h3>
                    <p>Active Accounts</p>
                </div>
            </div>
            <div class="stat-card">
                <span class="material-icons-outlined">person_add</span>
                <div>
                    <h3>12</h3>
                    <p>New This Week</p>
                </div>
            </div>
        </div>

        <!-- User Table Section -->
        <section class="management-section">
            <div class="section-header">
                <h2><span class="material-icons-outlined">group</span> Registered Accounts</h2>
                <div class="search-bar-alt">
                    <span class="material-icons-outlined">search</span>
                    <input type="text" placeholder="Search by name or ID...">
                </div>
            </div>

            <div class="table-responsive">
                <table class="user-table">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2023-10452</td>
                            <td>Sebastino De Cavite</td>
                            <td>sebastino@sscr.edu.ph</td>
                            <td>BSCS</td>
                            <td><span class="role-tag student">Student</span></td>
                            <td class="action-btns">
                                <button class="action-btn reset" title="Reset Password"><span class="material-icons-outlined">lock_reset</span></button>
                                <button class="action-btn delete" title="Delete Account"><span class="material-icons-outlined">delete_outline</span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2022-09123</td>
                            <td>Maria Clara</td>
                            <td>m.clara@sscr.edu.ph</td>
                            <td>BSHM</td>
                            <td><span class="role-tag student">Student</span></td>
                            <td class="action-btns">
                                <button class="action-btn reset"><span class="material-icons-outlined">lock_reset</span></button>
                                <button class="action-btn delete"><span class="material-icons-outlined">delete_outline</span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>ADM-001</td>
                            <td>Admin Juan</td>
                            <td>admin@sscr.edu.ph</td>
                            <td>Staff</td>
                            <td><span class="role-tag admin">Admin</span></td>
                            <td class="action-btns">
                                <button class="action-btn reset"><span class="material-icons-outlined">lock_reset</span></button>
                                <button class="action-btn delete"><span class="material-icons-outlined">delete_outline</span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <?php include '../../component/footer/footer.php' ?>

    <script src="../../component/navbar/nav.js"></script>
</body>
</html>
