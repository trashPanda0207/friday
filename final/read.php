<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <?php
        require_once 'config.php';

        $conn = new mysqli($dbConfig['hostname'], $dbConfig['username'], $dbConfig['password'], $dbConfig['database']);
        
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        $sql = "SELECT * FROM `price` WHERE category = '顯示卡'";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        function print_all() {
            global $rows;
            echo "<table border='1'>";
            echo "<tr><th>no</th><th>category</th><th>brand</th><th>specification</th><th>price</th><th>date</th><th>url</th></tr>";
            foreach ($rows as $row) {
                echo "<tr>";
                echo "<td>" . $row['no'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . $row['brand'] . "</td>";
                echo "<td>" . $row['specification'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['url'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }

        function main() {
            print_all();
        }

        main();
    ?>
</body>
</html>
