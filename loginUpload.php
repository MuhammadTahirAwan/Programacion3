<?php
session_start();

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password (if any)
$dbname = "BIGBANG"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$username = $_POST['username'];
$password = $_POST['password'];
$filename = $_FILES['userfile']['name']; 


// Print out the username and password for debugging
var_dump($username);
var_dump($password);
var_dump($filename);

// var_dump(isset($_FILES['userfile']));


// Get user input
$user = $_POST['username'];
$pass = $_POST['password'];
$target_dir = "uploads/";

// Ensure the directory exists
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// Handle file upload
$file_path = null;
if (isset($_FILES['userfile'])) {
    $target_file = $target_dir . basename($_FILES["userfile"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check file size (limit to 5MB)
    if ($_FILES["userfile"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($_FILES["userfile"]["error"] === UPLOAD_ERR_OK) {
        // Proceed with moving the file
    } else {
        echo "File upload error: " . $_FILES["userfile"]["error"];
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {

        // var_dump(move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file));

        if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) {
            $file_path = $target_file; // Save the file path to store in the database

            var_dump($file_path);
            echo "The file ". htmlspecialchars(basename($_FILES["userfile"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Query to check if the user exists
$sql = "SELECT * FROM users WHERE username='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the row
    $row = $result->fetch_assoc();

    // var_dump($row);
    var_dump($pass);
    var_dump($row['password']);
    var_dump($file_path);

    var_dump($pass === $row['password']);

    // Verify password
    if ($pass === $row['password']) {
        // Update the user's file_path in the database
        if ($file_path !== null) {
            $update_sql = "UPDATE users SET file_path='$file_path' WHERE username='$user'";
            if ($conn->query($update_sql) === TRUE) {
                echo "File path updated successfully.";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }

        // $_SESSION['username'] = $user;
        // header("Location: home.php");
        // exit();
        
    } else {
        echo "Invalid password!";
    }
} else {
    echo "No user found with username: $user";
}

$conn->close();
?>
