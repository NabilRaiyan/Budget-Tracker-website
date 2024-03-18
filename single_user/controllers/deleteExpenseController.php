
<?php include '../model/mydb.php';

$expense_id = $_GET['expenseId'];

$mydb = new Model();
$conObj = $mydb->OpenConn();

$result = $mydb->deleteExpense($conObj, "expenses", $expense_id);

if ($result === TRUE){
    echo 'Expense deleted successfully';

    header('Location: ../views/expense.php');
}else{
    echo "Deletion unsuccessful";
}





?>