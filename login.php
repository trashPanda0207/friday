<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <style>
        .parent, .title{
            display: flex;
            justify-content: center;
            align-content: center;
            flex-wrap: wrap;  
        }
    </style>
</head>
<body bgcolor="c0c0c0">
<div class="title">
        <h1>Login</h1>
    </div>
    <div class="parent">
        <form action="index.php" method="POST">
            <label for="name">User Name:</label><br>    
            <input type="text" name="name" id="name" required/> <br> <br>

            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" required/> <br> <br>

            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>