<?php
  // database info
  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "userDB";
  $table = "users";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $result = mysqli_query($conn, "SELECT * FROM {$table}");

  $data = array();
  while ($row = mysqli_fetch_object($result))
  {
      array_push($data, $row);
  }

  echo json_encode($data);
  exit();

?>