<?php
include("../inc/connect.php") ;
$id=$_POST['ajax_id'];
$q1=mysql_query("SELECT * FROM subservices WHERE sid='".$id."'")or die (mysql_error());
$p_numrows=mysql_num_rows($q1)or die (mysql_error());
$m_row=mysql_fetch_all($q1);
function mysql_fetch_all($query)
 {
 	$temp='';
    $all = array();
    while ($all[] = mysql_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
$a='';
foreach ($m_row as $value) {
	$a.='<option value="'.$value['sid'].'">'.$value['subservicename'].'</option>';
}
echo $a;
?>