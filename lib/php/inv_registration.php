<?php
  include 'dbconnect.php';

  $connect = OpenConnection();

  $categorie = $_POST['Categorie'];
  $sub_categorie = $_POST['Sub_categorie'];
  $model = $_POST['Model'];
  $location = $_POST['Location'];
  $owner = $_POST['Owner'];
  $imei = $_POST['Imei'];
  $serieNumber = ['SerieNumber'];
  $description = ['Description'];

  $sql = "INSERT INTO inventory (Categorie, Sub_categorie, Model, Location, IMEI, Serie_number, Owner, Description)
                        VALUES ('$categorie', '$sub_categorie', '$model', '$location', '$imei', '$serieNumber', '$owner', '$description')";

  if(!mysqli_query($connect,$sql)){
    echo "Not Inserted";
  }
  else {
    echo "Inserted";
  }

  CloseConnection($connect);
?>
