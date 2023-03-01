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
  $decode = json_decode($data, true);
  // LOOP OVER $decode -> create
  $html = "";
  foreach($decode as $k => $v) {
    $html .= "<p>{$k} - {$v}</p>";
  } 
  // MAIL FUNCTION NEEDS TO BE HERE
  $to = "Ray Diaz";
  $subject = "Test Email";
  $from = "rstiehm@advisorsacademy.com";
  $reply = "rstiehm@advisorsacademy.com";
  $body = $html;
  function send_mail($to, $subject, $body, $from, $reply)
  {
    $headers = "From: {$from}" . "\r\n" . "Reply-To: {$reply} " . " \r\n " . "X-Mailer: PHP/" . phpversion();
    if ($_SERVER['SERVER_NAME'] != "localhost") {
      mail($to, $subject, $body, $headers);
    } else {
      echo "<hr><p>To: {$to}</p><p>Subject: {$subject}</p>{$body}<p>" . $headers . "</p><hr>";
    }
  }

  send_mail($to, $subject, $body, $from, $reply);

  // var_dump($decode);
  $query = "INSERT INTO `requests` (`request`) VALUES ('$data')";
  $result = mysqli_query($con, $query);
  if (!$result) {
    die("FAILED" . mysqli_error($con));
  } else {
    //echo $body . "This is the body";
  }

}


