<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {  // Ensures POST method is used
    $servername = "localhost";
    $username = "root";  // Change if necessary
    $password = "";  // Change if necessary
    $database = "user_database";

    // Connect to MySQL
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user input
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (!empty($email) && !empty($password)) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT); // Hash password

        // Insert data into database
        $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $passwordHash);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please fill in all fields.";
    }

    $conn->close();
} else {
    http_response_code(405);  // Send 405 error if wrong method is used
    echo "Invalid request method!";
}
?>
