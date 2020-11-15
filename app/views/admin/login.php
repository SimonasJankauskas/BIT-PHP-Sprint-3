<?php require VIEW_ROOT . '/templates/header.php'; ?>


<div class='login-wrapper'>
    <h2>Login</h2>
    <p>Please fill in your credentials to login.</p>
    <form action='<?php echo BASE_URL; ?>/admin/login.php' method='POST'>
        <div class='form-group'>
            <label>Username</label>
            <input class="login-inputs" type='text' name='username' class='form-control'>

        </div>
        <div class='form-group'>
            <label>Password</label>
            <input class="login-inputs" type='password' name='password' class='form-control'>

        </div>
        <div class='form-group'>
            <input type='submit' class='btn btn-primary' name='login'> <?php print($err); ?>
        </div>
    </form>
</div>
<p style="font-weight: bold; text-align: left;">Login credentials</p>
<p style="text-align: left;">Username: admin</p>
<p style="text-align: left;">Password: 1234</p>

<?php require VIEW_ROOT . '/templates/footer.php' ?>