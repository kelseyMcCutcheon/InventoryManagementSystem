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
                $_SESSION['username']=$username;
                echo $_SESSION['username'];
                $user_role = mysqli_fetch_assoc($result)['user_type'];
                $_SESSION['user_type'] = $user_role;
                if ($user_role == 1) {
                    header("Location: ../admin/adminView.php");
                }
                else if ($user_role == 2) {
                    header("Location: ../repair/repairView.php");
                }
            }
            else {
                 echo "Incorrect Login";
            }
        }
    }

?>