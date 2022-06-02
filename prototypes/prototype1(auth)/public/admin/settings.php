<?php

session_start();

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="hidden" value=<?php echo $_SESSION['id'] ?>>
        <input type="text" value=<?php echo $_SESSION['email'] ?>>
        <input type="password" placeholder = "passowrd"> 
        <input type= "passowrd" placeholder=
      

    </form>
</body>
</html>