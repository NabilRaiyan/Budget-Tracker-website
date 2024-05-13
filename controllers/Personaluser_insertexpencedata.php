<?php
include ('../models/personaluserdb.php');

$hasError = false; // Use a boolean variable for error checking

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);


if (empty($mydata['name']) || empty($mydata['amount']) || empty($mydata['type'])) {
    $hasError = true; // Set error flag if any required field is missing
}
//insert or update data
if (!$hasError) {
    $mydb = new Model();
    $conObj = $mydb->OpenConn();

    $result = $mydb->addExpence(
        $conObj,
        "expence",
        $mydata['id'],
        $mydata['name'],
        $mydata['amount'],
        $mydata['type']
    );

    if ($result === TRUE) {
        echo "Savings data inserted successfully.";
    } else {
        echo "Data insertion unsuccessful." . $conObj->error;
    }
} else {
    echo "Please enter all the information";
}



?>