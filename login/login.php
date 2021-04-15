<?php
    // Validates the login
    session_start();

    require "../database/connection.php";

    $connection = db_connect();

    $username = $_POST["username"];
    $pw = $_POST["password"];
    
    if ($username != "" && $pw != "") {
        $query = "select user_type from users where email_address='".$username."' and password='".$pw."';";
    
        $result = mysqli_query($connection, $query);

        if (!$result)
            die("Query Failed: " . mysqli_error(($connection)));
        else {
            if (mysqli_num_rows($result) == 1) {
                // getting rid of login error if exists
                if (isset($_SESSION['login_err'])) {
                    unset($_SESSION['login_err']);
                }
                // storing username
                $_SESSION['username']=$username;
                // getting and storing user role
                $user_role = mysqli_fetch_assoc($result)['user_type'];
                $_SESSION['user_type'] = $user_role;
                // admin
                if ($user_role == 1) {
                    header("Location: ../admin/adminView.php");
                }
                // repair
                else if ($user_role == 2) {
                    header("Location: ../repair/repairView.php");
                }
            }
            else {
                // setting login error
                $_SESSION['login_err'] = "Invalid Login";
                // seding back to login
                header("Location: ../index.php");
            }
        }
    }

?>