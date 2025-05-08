<?php include 'header.php';?>
<!-- Hero Section -->
<section class="hero">
    <div class="hero-content" >
        <h1>Welcome to Northwell Institute of Technology </h1>
        <p>Shaping futures through quality education</p>
        <a href="#registration" class="cta-button">Start Your Application</a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section">
    <h2 style= "color:#ff6600">About Our College</h2>
    <div class="about-content">
        <img src="../images/entry.jpeg" alt="College Campus">
        <div class="about-text">
            <p>Founded in 2020, NIT College has been a pioneer in providing quality education to students from diverse backgrounds. Our mission is to empower students with knowledge and skills to succeed in their careers.</p>
            <p>With state-of-the-art facilities and experienced faculty, we create an environment conducive to learning and personal growth.</p>
            <!-- <a href="about.php" class="read-more">Learn More</a> -->
        </div>
    </div>
</section>

<!-- Academics Section -->
<section id="academics" class="section">
    <h2 style= "color:#ff6600">Academic Programs</h2>
    <div class="programs-grid">
        <div class="program-card">
            <i class="fas fa-laptop-code"></i>
            <h3>Computer Science</h3>
            <p>4-year degree program with specialization options</p>
        </div>
        <div class="program-card">
            <i class="fas fa-briefcase"></i>
            <h3>Business Administration</h3>
            <p>Comprehensive business education with real-world applications</p>
        </div>
        <div class="program-card">
            <i class="fas fa-flask"></i>
            <h3>Engineering</h3>
            <p>Hands-on engineering programs with industry partnerships</p>
        </div>
    </div>
    <!-- <a href="programs.html" class="view-all">View All Programs</a> -->
</section>

<!-- Registration Section -->
<section id="registration" class="section">
    <h2 style= "color:#ff6600 ">Registration</h2>
    <div class="registration-form">
        <h3>Begin Your Application</h3>
        <form id="std-form">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input placeholder = "Enter Your Name" type="text" id="name" required>
            </div>
            <div class="form-group" >
                <label for="email">Email</label>
                <div style ="display : flex">
                    <input type="email" id="email" placeholder="Enter your email" required>
                    <button type="button" class="verify-btn">Verify</button>
                    <span style="display:none"><i class="fas fa-check verified-icon"></i></span>
                </div>
            </div>
            <div class="form-group">
                <label for="otp">OTP</label>
                <input placeholder = "Enter OTP" type="text" id="otp" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone No</label>
                <input placeholder = "Enter Your Phone No." type="text" id="phone" required>
            </div>
            <div class="form-group">
                <label for="adrs">Address</label>
                <input placeholder = "Enter Your Address" type="text" id="adrs" required>
            </div>
            <div class="form-group ">
                <label class="gender-label">Gender:</label>
                <div class="gender-options">
                    <label class="gender-option">Male</label>
                    <input type="radio" name="gender" value="M">

                    <label class="gender-option">Female</label>
                    <input type="radio" name="gender" value="F">
                </div>
            </div>
            <div class="form-group">
                <label for="program">Program of Interest</label>
                <select id="program" required>
                    <option value="">Select a program</option>
                    <option value="cs">Computer Science</option>
                    <option value="ba">Business Administration</option>
                    <option value="eng">Engineering</option>
                </select>
            </div>
            <button type="submit" class="submit-btn">Submit Application</button>
        </form>
        <div id="ticket-display" style="display:show;">
            <h3>Your Application Ticket</h3>
            <p>Ticket #: <span id="ticket-number"></span></p>
            <p>We've sent details to your email. An admin will contact you shortly.</p>
        </div>
    </div>
</section>

<!-- Toast Notification -->
<!-- <div class="toast success-toast show">
  <span class="toast-message">✔️ Operation successful!</span>
 <button class="toast-close"><i class="fas fa-times"></i></button>
</div> -->

<div class="toast error-toast ">
  <!-- <span class="toast-message">❌ Something went wrong!</span>
 <button class="toast-close"><i class="fas fa-times"></i></button> -->
</div>

<?php include "footer.php"?>
<script>
    $(document).ready(function() {
    //     // Form submission
    //     $('#app-form').submit(function(e) {
    //         e.preventDefault();
            
    //         // Generate random ticket number
    //         const ticketNum = 'NIT-' + Math.floor(100000 + Math.random() * 900000);
            
    //         // Display ticket
    //         $('#ticket-number').text(ticketNum);
    //         $('#app-form').hide();
    //         $('#ticket-display').show();
            
    //         // In a real application, you would send this data to your server
    //         // and the admin panel would access it from there
    //         console.log('Application submitted:', {
    //             name: $('#fullname').val(),
    //             email: $('#email').val(),
    //             program: $('#program').val(),
    //             ticket: ticketNum
    //         });
    //     });
        $("std-form").submit(function() {
            console.log("form submit btn clicked...");
            
            $.ajax({
                url:"",
                method:"POST",
                data:{},
                success:function(res){

                },
                error:function(e){
                    console.log("error caugth while calling api-->",e);
                    
                    $(".error-toast").addClass("show").html(` <span class="toast-message">❌ Something went wrong!</span>
                                                                <button class="toast-close"><i class="fas fa-times"></i></button>`);

                }

    
            })
        })
        $(document).on("click",".toast-close",function() {
            console.log("remove btn clicked-->");
            console.log($(this).parent());
            
            
            $(this).parent().removeClass("show");
        })
    });
</script>