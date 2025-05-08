<?php
$page_title = "NIT Admin Login";
$body_class = "auth-page";
include 'includes/header.php';
?>

<!-- Only shows branding (no nav) -->
<div class="auth-container">
    <!-- ... login form ... -->
</div>

<body class="login-page">
    <!-- Background Blur Effect -->
    <div class="login-bg"></div>

    <main class="login-container">
        <!-- College Branding -->
        <div class="text-center mb-4 " >
           <div style="display:flex ; justify-content: center;">
               <img src="../images/logo.png" alt="NIT Logo" class="login-logo">
                <div style="display:grid">
                    <h1 style="margin:1px">Northwell Institute of Technology</h1>
                    <p class="text-muted" style="bold: 20px;" >Excellence in Education Since 2020</p>
                </div>
            </div>
        </div>

        <!-- Login Card -->
        <div class="card" style="max-width: 450px; margin: 0 auto;">
            <h2 class="card-title">Sign In</h2>
            
            <form id="loginForm">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input style='margin-right: -22px' type="email" id="email" placeholder="admin@nit.edu" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <div style="display:flex ; width:auto">
                        <input type="password" id="password" placeholder="••••••••" required>
                        <i class="fa-solid fa-eye" style="font-size: 24px; margin-top: 10px ; margin-left: 7px ; margin-right: -22px;"></i>
                    </div>
                    <!-- <div class="show-password-toggle">
                        <label for="showPassword"> Show Password</label>
                        <input type="checkbox" id="showPassword"> 
                    </div> -->
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </main>

    <!-- Scripts -->
    <script src="assets/js/common.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>