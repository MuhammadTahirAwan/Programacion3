<?php



session_start();
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'BIGBANG');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the posted data
$username = $_POST['username'];
$password = $_POST['password'];


// Print out the username and password for debugging
var_dump($username);
var_dump($password);


// Query the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    
    $_SESSION['username'] = $username;
    var_dump($_SESSION['username']);

    
    //header("Location: myHomePage.php");
    header("Location: myHomePageWithGame.php");
        exit();


    // echo "Login successful!";
} else {
    echo "Invalid username or password!";
}

// Close the connection
$conn->close();
?>
