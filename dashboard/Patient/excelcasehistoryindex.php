<?php
include("../inc/connect.php") ;

$query=mysql_query("SELECT `id`, `date`, `patient`, `description`FROM addmedicalhistory")or die (mysql_error($db_connect));
$numrows=mysql_num_rows($query)or die (mysql_error($db_connect));


// $row1=mysql_fetch_all($query);
// function mysql_fetch_all($query) {
//     $all = array();
//     while ($all[] = mysql_fetch_assoc($query)) {$temp=$all;}
//     return $temp;SELECT * FROM patientregister"
//}
// $stmt=$db_con->prepare('SELECT * FROM medicinecategory');
// $stmt->execute();


?>

<html>
<head>
<title>Case History</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="panel">
    <div class="panel-heading">
      <h3>Case History</h3>
      <div class="panel-body">
        <table border="1" class="table table-bordered table-striped">
            <tr>
              <th>Sr.no</th>
              <th>Date</th>
              <th>Patient</th>
              <th>Description</th>
              
              
            </tr>
          <?php
// while($row = mysql_fetch_assoc($extract))
          while($row=mysql_fetch_assoc($query))
          {
            
            echo '
            <tr>
              <td>'.$row["id"].'</td>
              <td>'.$row["date"].'</td>
              <td>'.$row["patient"].'</td>
              <td>'.$row["description"].'</td>
              
            </tr>
            ';
          }
          ?>
        </table>
        <a href="excelcasehistory.php">Export To Excel</a>

      </div>

    </div>

  </div>

</div>



</body>
</html>
