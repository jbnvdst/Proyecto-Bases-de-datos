<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'password') {
    header('Location: _1_main.php');
} else {
    header('Location: index.php');
}

?>