<?php 
    include "../model/mydb.php";

    $expense_name=$expense_amount=$expense_type = "";
    $expense_nameError=$expense_amountError=$expense_typeError=$hasError = "";


    if (isset($_REQUEST["Submit"])){

        if (!empty($_REQUEST["expense_name"])){
            $expense_name = $_REQUEST["expense_name"];
        }else{
            $expense_nameError = "Please enter expense name";
            $hasError = 1;
        }

        if (!empty($_REQUEST['expense_amount'])){
            $expense_amount = $_REQUEST["expense_amount"];
        }else{
            $expense_amountError = "please enter expense amount";
            $hasError = 1;
        }

        if (!$_REQUEST["expense_type"] == ""){
            $expense_type = $_REQUEST["expense_type"];
        }else{
            $expense_typeError = "Please enter expense type";
            $hasError = 1;
        }


        // db code

        if (!$hasError == 1){
            $mydb = new Model();
            $conObj = $mydb->OpenConn();
    
            $result = $mydb->addExpense($conObj, "expenses", $expense_name, $expense_amount, $expense_type);
    
            if ($result === TRUE){
                echo "Successfully expenses inserted";
            }else{
                echo "Data inserted unsuccessful " . $conObj->error;
            }
        }else{
            echo "Please enter all the information";
        }
    }

 
    $mydb = new Model();
    $conObj = $mydb->OpenConn();
    $allExpenseResult = $mydb->getAllExpense($conObj, "expenses");



?>