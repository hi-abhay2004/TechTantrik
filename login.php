<?php
/* session_start(); */


$username = $_POST['email']; 
$password = $_POST['password'];
$loggedIn = true; 

if ($loggedIn) {
    // Set session variables
    $_SESSION['loggedin'] = true;
    // Set the showLoginSignup variable to false to hide the login and signup buttons
    $showLoginSignup = false;
} else {
    // Set the showLoginSignup variable to true to show the login and signup buttons
    $showLoginSignup = true;
}

// Redirect the user back to the homepage or any other page
header("Location: index.php");
exit;
?>
