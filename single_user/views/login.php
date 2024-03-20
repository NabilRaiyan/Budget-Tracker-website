<?php 
include "../controllers/login_controller.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <form action="" method="POST">
        <label for="email">Email</label><br><br>
        <input type="text" name="email" placeholder="Enter Email">
        <?php echo $emailError; ?><br><br>


        <label for="pass">Password</label><br><br>
        <input type="password" placeholder="Enter Password" name="password">
        <?php echo $passwordError; ?><br><br>

        <button name="Submit" type="submit">Log In</button>
    </form>
    
</body>
</html>