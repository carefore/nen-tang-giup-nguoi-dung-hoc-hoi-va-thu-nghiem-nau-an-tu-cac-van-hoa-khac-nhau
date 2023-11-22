<?php
// Connection to MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$recipe_name = $_POST['recipe_name'];
$cultural_origin = $_POST['cultural_origin'];
$ingredients = $_POST['ingredients'];
$instructions = $_POST['instructions'];

// SQL query to insert data into table
$sql = "INSERT INTO recipes (recipe_name, cultural_origin, ingredients, instructions)
        VALUES ('$recipe_name', '$cultural_origin', '$ingredients', '$instructions')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
