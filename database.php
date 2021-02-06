<?php
    $dsn = 'mysql:host=myourhost;dbname=yourusername_my_guitar_shop1';
    $username = 'yourusername';
    $password = 'yourpassword';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
