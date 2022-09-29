<?php 
session_start();

    print_r($_POST);
    if (isset($_POST['username'])) {
        $nameuser = $_POST['username'];
        $passwords = $_POST['password'];
        if ( $nameuser === 'admin-ssit' and $passwords === 'ssit2022'){
          
           //echo ($_SESSION['username']);
            header('location: indexadmin.php');
            //unset($_SESSION['username']);
        }
        
        else {
            header('location: login.php');
            $_SESSION['error'] = "Please Check Username or Password Incprrect";
        }
    }

?>