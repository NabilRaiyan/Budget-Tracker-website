<?php 

    class Model{
        function OpenConn(){
            $conn = new mysqli("localhost", "root", "", "budget_tracker");
            return $conn;
        }

        function addUser($conn, $table, $username, $email, $password, $confirm_password, $monthly_income){
            $sql = "INSERT INTO $table (username, email, password, confirmPassword, monthly_income) 
            VALUES ('$username', '$email', '$password', '$confirm_password', '$monthly_income')";
            $result = $conn->query($sql);
            return $result;
        }


        function Login($conn, $table, $email, $password){
            $sql = "SELECT email, password FROM $table WHERE email='$email' AND password = '$password'";
            $result = $conn->query($sql);
            return $result;
        }


        function addExpense($conn, $table, $expense_name, $expense_amount, $expense_type){
            $sql = "INSERT INTO $table (expense_name, expense_amount, expense_type)
            VALUES ('$expense_name', '$expense_amount', '$expense_type')";

            $result = $conn->query($sql);
            return $result;
        }


        function getAllExpense($conn, $table){
            $sql = "SELECT * FROM $table";

            $result = $conn->query($sql);
            return $result;
        }


        function addSavings($conn, $table, $savings_name, $savings_amount, $savings_type){
            $sql = "INSERT INTO $table(savings_name, savings_amount, savings_type)
            VALUES('$savings_name', '$savings_amount', '$savings_type')";
            $result = $conn->query($sql);
            return $result;
        }


        function getAllSavings($conn, $table){
            $sql = "SELECT * FROM $table";
            $result = $conn->query($sql);
            return $result;
        }


        function savingsExist($conn, $table, $id){
            $sql = "SELECT * FROM $table WHERE id='$id'";
            $result = $conn->query($sql);
            return $result;
        }

        function updateSavings($conn, $table, $id, $savings_name, $savings_amount, $savings_type){
            $sql = "UPDATE $table SET id='$id', savings_name='$savings_name', savings_amount='$savings_amount', savings_type='$savings_type'
            WHERE id='$id'";
            $result = $conn->query($sql);
            return $result;
        }
        
        function deleteSavings($conn, $table, $id){
            $sql = "DELETE FROM $table WHERE id='$id'";
            $result = $conn->query($sql);
            return $result;
        }


        function deleteExpense($conn, $table, $id){
            $sql = "DELETE FROM $table WHERE id='$id'";
            $result = $conn->query($sql);
            return $result;
        }


        
    }



?>