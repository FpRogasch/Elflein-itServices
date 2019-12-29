<?php
//include database configuration file
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "db_itservices";

// Connection with the Server
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$query = $conn->query("SELECT * FROM inv_it_test ORDER BY ProductID ASC");

if ($query->num_rows > 0) {
  $delimiter = ";";
  $filename = "inventory_" . date('Y-m-d') . ".csv";

  //create a file pointer
  $f = fopen('php://memory', 'w');

  //set column headers
  $fields = array('ProductID', 'Categorie', 'Model', 'Created_date', 'Location', 'IMEI', 'Serie_number', 'Owner', 'Description');
  fputcsv($f, $fields, $delimiter);

  //output each row of the data, format line as csv and write to the file pointer
  while ($row = $query->fetch_assoc()) {
    //$status = ($row['status'] == '1')?'Active':'Inactive';
    $lineData = array($row['ProductID'], $row['Categorie'], $row['Model'],
                      $row['Created_date'], $row['Location'], $row['IMEI'],
                      $row['Serie_number'], $row['Owner'], $row['Description'],);
    fputcsv($f, $lineData, $delimiter);
  }

  //move back to beginning of file
  fseek($f, 0);

  //set headers to download file rather than displayed
  header('Content-Type: text/csv');
  header('Content-Disposition: attachment; filename="' . $filename . '";');

  //output all remaining data on a file pointer
  fpassthru($f);
}
exit;
?>
