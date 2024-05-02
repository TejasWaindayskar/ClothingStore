<?php

function check_login($con)
{
    // Check if the user is logged in
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM users WHERE user_id = '$id' LIMIT 1";

        $result = mysqli_query($con, $query);
        // Check if the query was successful and returned at least one row
        if($result && mysqli_num_rows($result) > 0)
        {
            // Fetch the user's data
            $user_data = mysqli_fetch_assoc($result);
            return $user_data; // Return the user's data
        }
    }
    // If the user is not logged in or their data cannot be fetched, redirect to the login page
    header("Location: login.php");
    die;
}

function random_num($length)
{
    $text = "";
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i=0; $i < $len; $i++) { 
        $text .= rand(0, 9);
    }

    return $text;
}
?>
