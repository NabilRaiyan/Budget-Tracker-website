<?php
include ('../models/personaluserdb.php');

$mydb = new Model();

// connecting db
$conn = $mydb->OpenConn();


$result = $mydb->savingshistory($conn, "savings");

if ($result->num_rows > 0) {
    $data = array();  //made data array type
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;       //data stored
    }
}

//TReturn JSON formatted Data as Response to ajax call as string
echo json_encode($data);

