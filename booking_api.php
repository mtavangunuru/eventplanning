<?php
// Database connection code
if (isset($_POST['name'])) {
    // Change the parameters as per your database configuration
    $con = mysqli_connect('localhost', 'root', '', 'db_contact');

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully to the database.<br>"; // Success message
    }

    // Get the POST records
    $txtName = $_POST['name'];
    $txtEmail = $_POST['email'];
    $txtPhone = $_POST['phone'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    // Check if passwords match
    if ($password1 !== $password2) {
        echo "Passwords do not match.";
        mysqli_close($con);
        exit; // Stop execution if passwords do not match
    }

    // Database insert SQL code
    $sql = "INSERT INTO `tbl_contact` (`name`, `email`, `phone`, `password1`, `password2`) 
            VALUES ('$txtName', '$txtEmail', '$txtPhone', '$password1', '$password2')";

    // Insert in database
    $rs = mysqli_query($con, $sql);
    if ($rs) {
        echo "Contact Records Inserted";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Close connection
    mysqli_close($con);
} else {
    echo "Are you a genuine visitor?";
}
?>
