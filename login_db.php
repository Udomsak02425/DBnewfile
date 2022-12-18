<?php
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($email)){
            array_push($errors, "Username is required");
        }
        if (empty($password)){
            array_push($errors, "password is required");
        }
        if (count($errors) == 0){
            $password = md5($password);
            $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                header("location: index.php");
            } else{
                array_push($errors, "Wrong username/password combination");
                $_SESSION['error'] = "something went wrong";
                header("location: login.php");
            }
        }
           
    }
?>