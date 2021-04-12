<?php
    // Validates the login

    require "connection.php";

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
                $_SESSION['user_type']=mysqli_fetch_assoc($result)['user_type'];
                echo "Login successful!";
            }
            else {
                 echo "Incorrect Login";
            }
        }
    }

?>