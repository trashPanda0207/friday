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