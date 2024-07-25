-<?php
   /* if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $servername = "localhost";  // replace with your database server
        $username = "root";  // replace with your database username
        $password = "";  // replace with your database password
        $dbname = "project2";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Set parameters
        $email = $_POST['email'];
        $user_password = $_POST['password'];

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO project (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $user_password);

        // Execute the statement
        if ($stmt->execute()) {
            
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close connection
        $stmt->close();
        $conn->close();
    }*/
?>

<?php
$loginerror="";
if(isset($_POST["email"]) && isset($_POST["password"])){
    if($_POST["email"] == "anikeshsingh@gmail.com" && $_POST["password"] == "ansh"){
    header("Location:landing.php");
}
else{
    $loginerror = "Incorrect Info";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Submission</title>
    <link rel="stylesheet" href="diaryicon.css">
    <link rel="stylesheet" type="text/css" href="phppractice.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MVK78+y+gLIBoVD59lQTYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK10nMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://kit.fontawesome.com/0bb659349c.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Your Diary</h1>

    <form action="phppractice.php" class="myform" method="post">
        <p style="color:red" > <?php echo $loginerror ?> </p>
        <input class="email" type="text" name="email" id="email" placeholder="Email..." />
        <input class="password" type="password" name="password" id="password" placeholder="Password..." />
        <form action="php2.php" method="GET">
        <button class="btn" type="submit">Login</button>
          </form>
    </form>

    <script src="phppractice.js"></script>
</body>
</html>
