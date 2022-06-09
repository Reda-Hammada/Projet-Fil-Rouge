<?php

session_start();


if(!$_SESSION['email'] && !$_SESSION['pass_word']){

    header('location:../auth/login.php');

}



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
    <header>
        <nav>
            <a href="../auth/logout.php">Log out</a>
            <a href="../admin/settings.php">Settings</a>
        </nav>
    <header>
    <section>
        <div>

            <?php echo "welcome " . $_SESSION['fullName'] . " this is your dashboard" . "and your id " . $_SESSION['id']; ?>

        </div>
    </section>
</body>
</html>