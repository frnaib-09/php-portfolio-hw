<?php
include ('./layouts/header.php');
?>
<!-- 
<link rel="icon" href="../images/web logo.png">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/slick.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/responsive.css">

<style>
    .email_form {
        margin: 150px auto 100px;
        width: 50%;
    }

    .email_form h1 {
        margin: 20px auto;
        text-align: center;
    }

    .email_form button {
        background: var(--btn-gradient);
        color: var(--primary-color);
        margin: 20px 0;
        padding: 10px 24px;
        border-radius: 8px;
        width: 100%;
        font-weight: 500;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: 0.25s ease;
    }

    .email_form button:hover {
        box-shadow: var(--common-shadow);
    }

    span {
        display: block;
        text-align: center;
        margin: 12px 0 20px;
        color: var(--anchor-color);
    }

    span a {
        color: var(--primary-color);
    }

    span a:hover {
        text-decoration: underline;
    }
</style>

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
    <span class="text-danger"><?= $_SESSION['form_errors']['password_error'] ?? null ?></span>
    <label for="psk">Confirm Password *</label>
    <input type="password" name="psk" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
    <button>Sign Up</button>
    <span>Already have an account? <a href="./signin.php">Sign In</a></span>
</form>

<?php
include_once('./layouts/footer.php');
?>