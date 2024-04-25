<?php 

    include "../model/mydb.php";

    $username=$email=$password=$confirm_password=$monthly_income= "";
    $usernameError=$emailError=$passwordError=$confirm_passwordError=$monthly_incomeError= $hasError="";


    if (isset($_REQUEST['Submit'])){

        // username validation
        if (strlen($_REQUEST['username']) < 0){
            $usernameError = "Please enter username";
            $hasError = 1;
        }elseif(strlen($_REQUEST['username']) < 4){
            $usernameError = "Username should atleast 4 character long";
            $hasError = 1;
        }else{
            $username = $_REQUEST["username"];
        }


        // password validation
        if (empty($_REQUEST['password'])){
            $passwordError = "Please enter password";
            $hasError = 1;
        }elseif(strlen($_REQUEST['password']) < 4){
            $passwordError = "Password should atleast 8 character long";
            $hasError = 1;
        }
        elseif(!preg_match('/[A-Z]/', $_REQUEST["password"])){
            $passwordError = "Password must contain atleast one uppercase";
            $hasError = 1;
        }
        else{
            $password = $_REQUEST["password"];
        }


        // email validation
        if (!empty($_REQUEST["email"])){
            if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@(gmail+\.)+com$/ix", $_REQUEST["email"])){
                $emailError = "Email is not valid";
                $hasError = 1;
            }else {
                $email = $_REQUEST["email"];
            }
        }else{
            $emailError = "Please enter email experience";
            $hasError = 1;
        }

        // confirm password validation
        if (!empty($_REQUEST['confirm_password'])){
            if ($_REQUEST["password"] === $_REQUEST["confirm_password"]){
                $confirm_password = $_REQUEST["confirm_password"];
            }else{
                $confirm_passwordError = "Password does not match";
                $hasError = 1;
            }
        }else{
            $confirm_passwordError = "please enter password";
            $hasError = 1;
        }


        // monthly income error
        if (empty($_REQUEST['monthly_income'])){
            $monthly_incomeError = "Please enter monthly income";
            $hasError = 1;
        }else{
            if (is_numeric($_REQUEST['monthly_income'])){
                $monthly_income = $_REQUEST['monthly_income'];

            }else{
                $monthly_incomeError = "Please enter numeric value only.";
                $hasError = 1;
            }
        }

         // db code

        if (!$hasError == 1){
            $mydb = new Model();
            $conObj = $mydb->OpenConn();

            $result = $mydb->addUser($conObj, "registration", $username, $email, $password, $confirm_password, $monthly_income);
            if ($result === TRUE){
                echo "Data inserted successfully";
            }else{
                echo "Error occured while inserting data " . $conObj->error;
                
            }
        }else{
            echo "Please enter all the information";
        }

    }



   


?>