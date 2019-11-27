<?php
  function OpenConnection(){
    // Variables
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "db_itservices";

    // Connection with the Server
    $conn = new mysqli('localhost', 'root', '', 'db_itservices');

    if(!$conn){
      die('Connection Failed : '.$conn->connect_error);
    }
    else {
      echo "Connect Successfully";
    }

    return $conn;
  }

  function CloseConnection($connect){
    $connect -> close();
  }
?>
