<?php
  include 'dbconnect.php';

  $connect = OpenConnection();

  $categorie = $_POST['Categorie'];
  $model = $_POST['activeModel'];
  $location = $_POST['Location'];
  $owner = $_POST['Owner'];
  $imei = $_POST['Imei'];
  $serieNumber = $_POST['SerieNumber'];
  $description = $_POST['Description'];

  $sql = "INSERT INTO inv_it_test (Categorie, Model, Location, IMEI, Serie_number, Owner, Description)
                        VALUES ('$categorie', '$model', '$location', '$imei', '$serieNumber', '$owner', '$description')";

  if(!mysqli_query($connect,$sql)){
    echo "</br>";
    echo "Not Inserted";
  }
  else {
    echo '<script>
      alert("record successfully inserted in the database");
      window.location.href = "../../index.html";
    </script>';
  }

  CloseConnection($connect);
?>
