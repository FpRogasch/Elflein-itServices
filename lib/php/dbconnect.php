<?php
  function OpenConnection(){
    // DB Details
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "db_itservices";

    // Connection with the Server
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if(!$conn){
      die('Connection Failed : '. mysqli_connect_errno() .')'. mysqli_connect_error());
    }
    else {
      echo '<script>
        alert("Successfully connected to the Database.");
      </script>';
    }

    return $conn;
  }

  function CloseConnection($connect){
    $connect -> close();
  }
?>
