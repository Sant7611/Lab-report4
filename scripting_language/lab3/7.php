<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>
    <h2>Submit Form</h2>
    <form action="process.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Display submitted data
    echo "<h2>Submitted Data:</h2>";
    echo "Name: $name <br>";
    echo "Email: $email";
} else {
    // If the form is not submitted via POST method, display an error message
    echo "Error: Form not submitted!";
}
?>
