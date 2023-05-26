<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .parent, .title{
            display: flex;
            justify-content: center;
            align-content: center;
            flex-wrap: wrap;  
        }
    </style>
</head>

<body bgcolor="FBB917">
    <div class="title">
        <h1>Transcripts</h1>
    </div>
    <div class="parent">
        <form action="create.php" method="POST">
            <label for="name">Name:</label><br>    
            <input type="text" name="name" id="name" required/> <br> <br>

            <label for="grade_one">grade_one:</label><br>
            <input type="number" name="grade_one" id="grade_one" required/> <br> <br>

            <label for="grade_two">grade_two:</label><br>
            <input type="number" name="grade_two" id="grade_two" required/> <br> <br>

            <label for="grade_three">grade_three:</label><br>
            <input type="number" name="grade_three" id="grade_three" required/> <br> <br>

            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>

<?php
require_once 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){
    $conn = new mysqli($dbConfig['hostname'], $dbConfig['username'], $dbConfig['password'], $dbConfig['database']) or die("Connection Failed:" .$conn->connect_error);
    if (isset($_POST["name"]) && isset($_POST["grade_one"]) && isset($_POST["grade_two"]) && isset($_POST["grade_three"])){
        $name = $_POST["name"];
        $grade_one = $_POST["grade_one"];
        $grade_two = $_POST["grade_two"];
        $grade_three = $_POST["grade_three"];
        $sql = "INSERT INTO `students` (`name`, `grade_one`, `grade_two`, `grade_three`) VALUES ('$name', '$grade_one', '$grade_two', '$grade_three')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "<script>
                    alert('Entry Successful');
                    window.location.href = 'index.php';
                  </script>";
            exit;
        } else {
            echo "Error Occurred";
        }
        
    }
}
?>