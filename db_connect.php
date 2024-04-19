<?php
session_start(); 

// Establishing connection parameters
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "users"; // Your MySQL database name
$port = 3306; // Your MySQL port (default is 3306)

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have obtained the login credentials from a form
if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Inserting data into the logindata table
    $sql = "INSERT INTO logindata (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // If the data is successfully inserted, set the session variables and redirect
        $_SESSION['loggedin'] = true;
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
