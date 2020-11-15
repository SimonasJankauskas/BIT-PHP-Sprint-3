
<?php
require '../app/start.php';

if (
    isset($_POST['login'])
    && !empty($_POST['username'])
    && !empty($_POST['password'])
) {
    if (
        $_POST['username'] == 'admin' &&
        $_POST['password'] == '1234'
    ) {
        $_SESSION['logged_in'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'admin';
        header('Location: ' . BASE_URL . '/admin/list.php');
    } else {
        $err = 'Wrong username or password!';
    }
}

require VIEW_ROOT . '/admin/login.php';
