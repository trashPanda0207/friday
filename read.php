<?php
require_once 'config.php';

$conn = new mysqli($dbConfig['hostname'], $dbConfig['username'], $dbConfig['password'], $dbConfig['database']);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

function print_all() {
    global $rows;
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Grade One</th><th>Grade Two</th><th>Grade Three</th></tr>";
    foreach ($rows as $row) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['grade_one'] . "</td>";
        echo "<td>" . $row['grade_two'] . "</td>";
        echo "<td>" . $row['grade_three'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

function add_scores($row) {
    global $rows;
    return $rows[$row]['grade_one'] + $rows[$row]['grade_two'] + $rows[$row]['grade_three'];
}

function personal_transcript($row) {
    global $rows;
    echo $rows[$row]['name'].":<br>";
    echo "=>成績總分 = " . add_scores($row) . "<br>";
    echo "=>成績平均 = " . add_scores($row) / 3 . "<br>";
}

function group_total_and_average() {
    function group_total(){
        return add_scores(0) + add_scores(1) + add_scores(2);
    }
    echo "==>所有學生成績總分: " . group_total() . "<br>";
    echo "==>所有學生成績平均 = " . group_total() / 9 . "<br>";
}

function modeling_output(){
    for ($i=0; $i < 3; $i++) {
        personal_transcript($i);
    }
    echo "<hr>";
    group_total_and_average();
}

function main(){
    modeling_output();
}

main();

mysqli_close($conn);
?>
