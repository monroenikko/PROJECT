<?php
    require('./dbconnect.php');

    session_start();
    $username = $_POST['user_username'];
    $password = $_POST['user_password'];
//    echo $un . ' ' . $pw;

    $stmt = $pdo->query('SELECT * FROM foodpage where user_username ="'.$username.'"
                        and user_password = "' . $password . '"');

    $row = $stmt->fetch();
    if ($row)
    {
        $_SESSION["user_id"] = $row['uid'];
        echo json_encode([
            'login_validate' => 1,
            'msg' => 'Login success'
        ]);
        return;
    }
    else
    {
        echo json_encode([
            'login_validate' => 0,
            'msg' => 'Invalid username or password'
        ]);
        return;
    }
?>