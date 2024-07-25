<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = "localhost";  // Your server name
    $username = "root";  // Your MySQL username
    $password = "";  // Your MySQL password
    $dbname = "dairy";  // Your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Set parameters
    $textarea = $_POST['textarea'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO dairy (`Date and Time`, Textarea) VALUES (CURRENT_TIMESTAMP, ?)");
    $stmt->bind_param("s", $textarea);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();

    // Refresh the page after submission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diary Entry</title>
    <link rel="stylesheet" href="dairy.css">
</head>
<body>
    <div class="diary-container">
        <h1>My Diary</h1>
        <form action="" method="post">
            <textarea class="textarea" name="textarea" id="textarea" placeholder="Write your thoughts here..." required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
