<?php
 $fname= ($_GET["fname"]);
//  echo $fname ;
 $lname= ($_GET["lname"]);
//  echo $lname;

 $servername = "mydb";
 $username = "root";
 $password = "wifi123#";
 $dbname= "student";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 
//  $sql = "select * from student_info";
$sql = "INSERT INTO student_info (fname, lname)
VALUES ('$fname', '$lname')";
 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  ?>
 