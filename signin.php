<?php
include ('./layouts/header.php');
?>

<form class="email_form" action="./controller/auth.php">
    <h1>Sign In</h1>
    <div class="alert text-danger text-center"><?= $_SESSION['form_errors']['email_error'] ?? '' ?></div>
    <label for="email">Email or Username *</label>
    <input name="email" type="text" placeholder="michel.stark@gmail.com">
    <label for="psk">Password *</label>
    <input type="password" name="psk" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
    <button type="submit">Sign In</button>
    <span>Have no account? <a href="./signup.php">Sign Up</a></span>
</form>

<?php
include_once('./layouts/footer.php');
?>