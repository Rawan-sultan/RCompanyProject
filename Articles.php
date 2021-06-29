<?php

$name=$_POST['nname'];
$title=$_POST['ttitle'];
$topic=$_POST['ttopic'];
if (!empty($name) || !empty($title) || !empty($topic)) {

/* check connection */

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "Article";
    // Connect to MySQL and open from_db database
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
	 die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into Article (name, title, topic) values(?, ?, ?)";
     //Prepare statement
      
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_Param("sss",$name,$title,$topic); 
      $stmt->execute();
      echo "New record inserted sucessfully";
   }
     $stmt->close();
        // Close connection
     $conn->close();
    }
    else {
      echo "All field are required";
      die();
     }
     ?>
