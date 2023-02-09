<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "hackathon";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// $tableName="health";
// $columns= ['userid','disease','currdate','nextdate','diseasepercent','improvement','medication'];
// $fetchData = fetch_data_health($databaseName, $tableName, $columns);

// function fetch_data_health($db, $tableName, $columns){
//  if(empty($databaseName)){
//   $msg= "Database connection error";
//  }elseif (empty($columns) || !is_array($columns)) {
//   $msg="columns Name must be defined in an indexed array";
//  }elseif(empty($tableName)){
//    $msg= "Table Name is empty";
// }else{

// $columnName = implode(", ", $columns);
// $query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC";
// $result = $db->query($query);

// if($result== true){ 
//  if ($result->num_rows > 0) {
//     $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
//     $msg= $row;
//  } else {
//     $msg= "No Data Found"; 
//  }
// }else{
//   $msg= mysqli_error($db);
// }
// }
// return $msg;
// }
// $tableName1="userinfo";
// $columns1= ['userid','username','mobile','gender','dob','qr'];
// $fetchData1 = fetch_data_health($databaseName, $tableName1, $columns1);

// function fetch_data_userinfo($databaseName, $tableName1, $columns1){
//  if(empty($databaseName)){
//   $msg= "Database connection error";
//  }elseif (empty($columns1) || !is_array($columns1)) {
//   $msg="columns Name must be defined in an indexed array";
//  }elseif(empty($tableName1)){
//    $msg= "Table Name is empty";
// }else{

// $columnName1 = implode(", ", $columns1);
// $query = "SELECT ".$columnName1." FROM $tableName1"." ORDER BY id DESC";
// $result = $db->query($query);

// if($result== true){ 
//  if ($result->num_rows > 0) {
//     $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
//     $msg= $row;
//  } else {
//     $msg= "No Data Found"; 
//  }
// }else{
//   $msg= mysqli_error($db);
// }
// }
// return $msg;
// }
?>