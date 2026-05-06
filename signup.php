<?php
include ('./layouts/header.php');
?>

<form class="email_form" action="./controller/user_validation.php" method="POST">
    <h1>Sign Up</h1>

    <label for="name">Your Nmae *</label>
    <input type="text" name="name" id="name" placeholder="Michel Stark">

    <label for="email">Email *</label>
    <input name="email" type="text" placeholder="michel.stark@gmail.com">
    <span class="text-danger"><?= $_SESSION['form_errors']['email_error'] ?? null ?></span>

    <label for="user">Username *</label>
    <input name="username" type="text" placeholder="michel.stark">
    <span class="text-danger"><?= $_SESSION['form_errors']['username_error'] ?? null ?></span>

    <label for="psk">Password *</label>
    <input type="password" name="conf_pass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
    <span class="text-danger"><?= $_SESSION['form_errors']['password_error'] ?? null ?></span>
    <label for="psk">Confirm Password *</label>
    <input type="password" name="psk" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
    <button>Sign Up</button>
    <span>Already have an account? <a href="./signin.php">Sign In</a></span>
</form>

<?php
include_once('./layouts/footer.php');
?>