<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "service_request");

$con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$con) {
  die("Connection Failed!!!");
}
