<?php
include ('./layouts/header.php');
?>
<!-- 
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/slick.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/responsive.css"> -->

<form class="email_form" action="">
    <h1>Sign In</h1>
    <label for="email">Email or Username *</label>
    <input name="email" type="text" placeholder="michel.stark@gmail.com">
    <label for="psk">Password *</label>
    <input type="password" name="psk" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
    <button>Sign In</button>
    <span>Have no account? <a href="./signup.php">Sign Up</a></span>
</form>

<?php
include_once('./layouts/footer.php');
?>