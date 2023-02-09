<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
	</style>
</head>
<!-- <?php

?> -->
<body>
   <?php
   include("database.php");
   if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT userid, disease, currdate, nextdate, diseasepercent, improvement, medication  FROM health";
$result = $conn->query($sql);

 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br> userid: ". $row["userid"]. " - Name: ". $row["disease"]. " -curr " . $row["currdate"] . " - Name: ". $row["nextdate"]. " - Name: ". $row["diseasepercent"]." - Name: ". $row["improvement"]. " - Name: ". $row["medication"].  "<br>";
    }
} else {
    echo "0 results";
}
$sq = "SELECT userid, username, mobile, gender, dob, qr  FROM userinfo";
$resul = $conn->query($sq);

 if ($resul->num_rows > 0) {
    while($row = $resul->fetch_assoc()) {
        echo "<br> userid: ". $row["userid"]. " - Name: ". $row["username"]. " -curr " . $row["mobile"] . " - Name: ". $row["gender"]. " - Name: ". $row["dob"]." - Name: ". $row["qr"].  "<br>";
    }
} else {
    echo "0 results";
}
$s="SELECT * From health";
$r=$conn->query($s);
$json_array= array();
while($row = mysqli_fetch_assoc($r)){
  $json_array[]=$row;
}
print_r(json_encode($json_array));
echo '</pre>';  
           echo json_encode($json_array);  

   ?>
</body>
</html>