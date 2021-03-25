<?php
  //echo "data2send.php";
  if (!empty ($_POST) && $_SERVER ['REQUEST_METHOD'] == 'POST'){
  //if(isset($_POST['submit'])){
    //echo "submit button ";
    // get values

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phrase = $_POST["phrase"];



    // database info
    $servername = "localhost";
    $username = "d09";
    $password = "d950#J87$";
    $dbname = "userDB";

    $table = "users";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection

    if (!$conn) {
      //echo "Failed";
      die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Enviando";
    // insert data
    $query  = "INSERT INTO {$table} (fname, lname, phrase) ";
    $query .= "VALUES ('{$fname}', '{$lname}','{$phrase}')";

    if (mysqli_query($conn, $query)) {
      //echo "New record created successfully";
    } else {
      //echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header('location: ../html/index.html'); 
  }
?>