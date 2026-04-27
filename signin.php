<?php
include ('./controller/header.php');
?>

<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/slick.css">

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
include_once('./controller/footer.php');
?>