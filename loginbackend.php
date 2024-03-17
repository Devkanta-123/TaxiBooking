<?php
session_start();
include 'db/db_connection.php';

// Retrieve form data
$firstname = $_POST['firstname'];
$password = $_POST['password'];

try {
    // Prepare SQL statement to check user credentials
    $stmt = $pdo->prepare("SELECT * FROM users WHERE firstname = :firstname AND password = :password");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Check if user exists
    if ($stmt->rowCount() > 0) {
        $_SESSION['firstname'] = $firstname;
        echo 'success';
    } else {
        echo 'Invalid username or password';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$pdo = null;
?>