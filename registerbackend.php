<?php
// include db connection
include 'db/db_connection.php';

// Retrieve form data
// var firstname = $('#firstname').val();
// var lastname = $('#lastname').val();
// var email = $('#email').val();
// var phoneno = $('#phoneno').val();
// var password = $('#password').val();



$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$password = $_POST['password'];
$address = $_POST['address'];



// Close the connection
$pdo = null;
?>