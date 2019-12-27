<?php
  include 'dbconnect.php';

  $connect = OpenConnection();
  $sql = "SELECT * FROM inv_it_test";
  $result = mysqli_query($connect, $sql);
  $array = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <!--
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="../../pages/pages.min.css"/>
    -->
    <title>Elflein - DB Inventory</title>
  </head>
  <body>
    <!--
    <header>
      <div class="container" id="header_container">
        <div class="row align-items-center" id="row_container">
          <div class="col-3">
            <a href="../index.html"><button class="back">Back</button></a>
          </div>
          <div class="col-6">
            <div class="elflein-logo">
              <img class="img-fluid" src="../images/logo-elflein.png" alt="Logo Elflein">
            </div>
            <h1 class="text-white">Inventory</h1>
          </div>
          <div class="col-3">
          </div>
        </div>
      </div>
    </header>
    -->
    <section>
      <div class="container-fluid mb-3 mt-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            Inventory
            <a href="exportData.php" class="btn btn-success pull-right">Export CSV</a>
          </div>
        </div>
          <table class="table table-md table-striped table-bordered mydatatable" style="width = 100%" id="mydatatable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ProductID</th>
                <th scope="col">Categorie</th>
                <th scope="col">Model</th>
                <th scope="col">Created_date</th>
                <th scope="col">Location</th>
                <th scope="col">IMEI</th>
                <th scope="col">Serie_number</th>
                <th scope="col">Owner</th>
                <th scope="col">Description</th>
                <th scope="col">EDIT</th>
              </tr>
            </thead>
            <tbody id="data">
            <?php
              foreach ($result as $row) : ?>
                <tr>
                  <td><?php echo $row['ProductID']; ?></td>
                  <td><?php echo $row['Categorie']; ?></td>
                  <td><?php echo $row['Model']; ?></td>
                  <td><?php echo $row['Created_date']; ?></td>
                  <td><?php echo $row['Location']; ?></td>
                  <td><?php echo $row['IMEI']; ?></td>
                  <td><?php echo $row['Serie_number']; ?></td>
                  <td><?php echo $row['Owner']; ?></td>
                  <td><?php echo $row['Description']; ?></td>
                  <td>
                    <form action="db_update.php" method="post">
                      <input type="hidden" name="edit_id" value="<?php echo $row['ProductID']; ?>">
                      <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
      </div>
    </section>
  </body>
  <!-- Scripts and jQuery-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $('#mydatatable').DataTable();
  </script>
</html>
