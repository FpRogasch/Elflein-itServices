<?php
  // Verbindung mit dem Server
  $connect = @mysqli_connect('127.0.0.1:8080', 'root', '', "test");

  // Validierung
  if(!$connect){
    echo "No se pudo conectar con el Servidor";
  } else {
    $base = mysql_select_db('test');
    if (!$base) {
      echo "No se encontro la Base de Datos";
    }
  }
  // Variablen des Formulars sammeln
  $Arbeitsort = $_POST['Location'];
  $Name = $_POST['Name'];
  $Benutzername = $_POST['employee'];

  //SQL Code
  $sql = "INSERT INTO users(Benutzername, Name, Arbeitsort) VALUES( '$Benutzername',
                                                                    '$Name',
                                                                    '$Arbeitsort')";

  //SQL-Code ausführen
  $execute = mysqli_query($connect, $sql);

  //Ausführung prüfen
  if (!$execute) {
    echo "Hubo algun error";
  }else {
    echo "Datos guardados correctamente<br><a href='index.html'>Zurück</a>";
  }
?>
