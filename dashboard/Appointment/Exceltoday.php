<?php
include("../inc/connect.php") ;

// $conn = new mysqli('localhost', 'root', '');
// mysqli_select_db($conn, 'hms');

/*$setSql = "SELECT `ur_Id`,`ur_username`,`ur_password` FROM `tbl_user`";
$setRec = mysqli_query($conn,$setSql);*/

$query=mysql_query("SELECT * FROM addappointment WHERE `app_date` = '".date('Y-m-d')."'")or die (mysql_error($db_connect));
$numrows=mysql_num_rows($query)or die (mysql_error($db_connect));


$columnHeader ='';
$columnHeader = "Sr NO"."\t"."Patient"."\t"."Doctor"."\t"."Date"."\t"."Start Time"."\t"."End Time"."\t"."Remark"."\t"."SMS"."\t";


$setData='';

while($rec =mysql_fetch_assoc($query))
{
  $rowData = '';
  foreach($rec as $value)
  {
    $value = '"' . $value . '"' . "\t";
    $rowData .= $value;
  }
  $setData .= trim($rowData)."\n";
}


header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Book record sheet.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo ucwords($columnHeader)."\n".$setData."\n";

?>
