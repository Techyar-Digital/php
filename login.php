<?php
session_start();

date_default_timezone_set('Asia/Karachi');

// Login credentials
$correct_phone = '+923112070793';
$correct_password = 'Hasanejaz@123';

// Log file
$log_file = 'login_attempts.log';

// Check login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $datetime = date('Y-m-d H:i:s');

    // Open log file
    $log = fopen($log_file, 'a');

    if ($phone === $correct_phone && $password === $correct_password) {
        // Successful login
        $_SESSION['loggedin'] = true;
        $_SESSION['login_time'] = time();
        
        // Log successful login
        fwrite($log, "[$datetime] Successful login: $phone\n");

        fclose($log);
        header('Location: index.php');
        exit();
    } else {
        // Unsuccessful login
        $_SESSION['loggedin'] = false;

        // Log unsuccessful login
        fwrite($log, "[$datetime] Unsuccessful login attempt: $phone\n");

        fclose($log);
        header('Location: login.html');
        exit();
    }
}
?>
