<?php
include("../inc/connect.php") ;
$service_id=$_POST['sub_id'];
$sub_q=mysql_query("SELECT * FROM subservices WHERE sid='".$service_id."'")or die (mysql_error());
$sub_numrows=mysql_num_rows($sub_q)or die (mysql_error());
$sub_row=mysql_fetch_all($sub_q);
function mysql_fetch_all($query)
 {
 	$temp='';
    $all = array();
    while ($all[] = mysql_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
$b='';
foreach ($sub_row as $value) {
	$b.=$value['Fee'];
}
echo $b;
?>