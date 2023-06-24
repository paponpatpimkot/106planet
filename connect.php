<?php
  $host = "localhost";
  $username = "root";
  $pass = "";
  $dbname = "planet";

  $con = mysqli_connect($host,$username,$pass,$dbname);
  $con->query("SET NAMES UTF8");
?>