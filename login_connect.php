<?php
// Database connection code
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Change the parameters as per your database configuration
    $con = mysqli_connect('localhost', 'root', '', 'db_contact');

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // Uncomment the line below to display a success message for connection
        // echo "Connected successfully to the database.<br>";
        echo "Connected successfully";
    }

    // Get the POST records
    $username = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Check if fields are filled
    if (empty($username) || empty($password)) {
        echo "Please fill in all fields.";
        mysqli_close($con);
        exit;
    }

    // Prepare a statement to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM tbl_contact WHERE email = ? AND password1 = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any user exists with the provided username and password
    if ($result->num_rows > 0) {
        // User found, proceed to login
        session_start();

        $_SESSION['email'] = $username; // Corrected to use $username instead of $email

        // Redirect to navbar.html
        header("Location: navbar.html");
        exit(); // Ensure no further code is executed after the redirect
    } else {
        echo "Invalid username or password.";
    }

    // Close connections
    $stmt->close();
    mysqli_close($con);
} else {
    echo "Are you a genuine visitor?";
}
?>
