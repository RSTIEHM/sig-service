<?php 
include("db.php");
$employeeType;
$employeeName;
$employeeDept;
$employeeDate;
$desktop;
$laptop;
$webcam;
$drive;
$printer;
$softphone;
$deskphone;
$directNumber;
$ringGroups;
$sigEmail;
$aaEmail;
$sisEmail;
$sfgEmail;

if(isset($_POST)) {
  $data = file_get_contents("php://input");
  // var_dump($data);
  $query = "INSERT INTO `requests` (`request`) VALUES ('$data')";
  $result = mysqli_query($con, $query);
  if (!$result) {
    die("FAILED" . mysqli_error($con));
  } else {
    $entry = json_decode($data, true);
    $entry["test"] = "From PHPXXXXX";
    echo "Success!!!";
  }

}


