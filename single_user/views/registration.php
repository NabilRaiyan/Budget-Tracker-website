<?php 

include '../controllers/registration_controller.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <div>
        <form method="POST" action="">

            <h1>Registration Page</h1>
            <label name="username_lbl">Username</label><br><br>
            <input name="username" placeholder="Enter your username" id=""/>
            <?php echo $usernameError; ?><br><br>

            <label name="email_lbl">Email</label><br><br>
            <input name="email" placeholder="Enter your email" id=""/>
            <?php echo $emailError; ?><br><br>

            <label name="password_lbl">Password</label><br><br>
            <input name="password" type="password" placeholder="Enter your password" id=""/>
            <?php echo $passwordError; ?><br><br>

            <label name="confirmPassword_lbl">Confirm Password</label><br><br>
            <input name="confirm_password" type="password" placeholder="Enter confirm password" id=""/>
            <?php echo $confirm_passwordError; ?><br><br>

            <label name="monthlyIncome_lbl">Monthly Income</label><br><br>
            <input name="monthly_income" placeholder="Enter monthly income" id=""/>
            <?php echo $monthly_incomeError; ?><br><br>

            <button name="Submit" type="submit">Register</button>
        </form>
    </div>
</body>
</html>