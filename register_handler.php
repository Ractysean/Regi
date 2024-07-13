<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);  // Store as plain text for demonstration

    // Store credentials in a text file
    $file = fopen("users.txt", "a");
    fwrite($file, "Username: $username, Email: $email, Password: $password\n");
    fclose($file);

    echo "Registration successful!";
} else {
    echo "Invalid request.";
}
?>
