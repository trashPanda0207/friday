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