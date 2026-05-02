<?php
include ('./layouts/header.php');
?>
<!-- 
<link rel="icon" href="../images/web logo.png">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/slick.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/responsive.css"> -->


<form class="email_form" action="./controller/user_validation.php" method="POST">
    <h1>Sign Up</h1>
    <label for="email">Email *</label>
    <input name="email" type="text" placeholder="michel.stark@gmail.com">
    <span class="text-danger"><?= $_SESSION['form_errors']['email_error'] ?? null ?></span>

    <label for="user">Username *</label>
    <input name="username" type="text" placeholder="michel.stark">
    <span class="text-danger"><?= $_SESSION['form_errors']['username_error'] ?? null ?></span>

    <label for="psk">Password *</label>
    <input type="password" name="conf_pass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
    <span class="text-danger"><?= $_SESSION['form_errors']['password_ error'] ?? null ?></span>

    <label for="psk">Confirm Password *</label>
    <input type="password" name="psk" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
    <span class="text-danger"><?= $_SESSION['form_errors']['confirm_pass_error'] ?? null ?></span>
    <button>Sign Up</button>
    
    <span class="btm">Already have an account? <a href="./signin.php">Sign In</a></span>
</form>

<?php
include_once('./layouts/footer.php');
?>