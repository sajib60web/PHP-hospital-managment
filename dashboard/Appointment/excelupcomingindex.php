<?php
include("../inc/connect.php") ;

$query=mysql_query("SELECT * FROM addappointment WHERE  `app_date`>'".date('Y-m-d')."'")or die (mysql_error($db_connect));
$numrows=mysql_num_rows($query)or die (mysql_error($db_connect));


// $row1=mysql_fetch_all($query);
// function mysql_fetch_all($query) {
//     $all = array();
//     while ($all[] = mysql_fetch_assoc($query)) {$temp=$all;}
//     return $temp;
//}
// $stmt=$db_con->prepare('SELECT * FROM medicinecategory');
// $stmt->execute();


?>

<html>
<head>
<title>Medicine Category</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="panel">
    <div class="panel-heading">
      <h3>Upcomming Uppointment</h3>
      <div class="panel-body">
        <table border="1" class="table table-bordered table-striped">
            <tr>
              <th>Sr.No</th>
              <th>Patient</th>
              <th>Doctor</th>
              <th>Date</th>
              <th>Start Time</th>
              <th>End Time</th>
              <th>Remark</th>
              <th>SMS</th>
              
            </tr>
          <?php
// while($row = mysql_fetch_assoc($extract))
          while($row=mysql_fetch_assoc($query)){
            echo '
            <tr>
              <td>'.$row["id"].'</td>
              <td>'.$row["patient"].'</td>
              <td>'.$row["doctor"].'</td>
              <td>'.$row["app_date"].'</td>
              <td>'.$row["starttime"].'</td>
              <td>'.$row["endtime"].'</td>
              <td>'.$row["remark "].'</td>
              <td>'.$row["sms "].'</td>
              
              
            </tr>
            ';
          }
          ?>
        </table>
        <a href="Excelupcomming.php">Export To Excel</a>

      </div>

    </div>

  </div>

</div>



</body>
</html>
