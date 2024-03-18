<?php include "../model/mydb.php"; 
$savings_id = $_GET['savingsId'];

$savings_exist = '';



$mydb = new Model();

$conObj =  $mydb->OpenConn();
$result = $mydb->savingsExist($conObj, "savings", $savings_id);

if ($result->num_rows == 1){
    echo "Savings Exist";
}else{
    echo "No data found";
}



?>