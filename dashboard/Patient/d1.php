<?php 
include("../inc/connect.php") ;
if(isset($_GET['id']))
      {
      	$sql="DELETE FROM addmedicalhistory WHERE  id=".$_GET['id']."";
      	//exit;
      	$write =mysql_query($sql) or die(mysql_error($db_connect));
            
              header("location:casehistory.php");
      }
      else
      	echo "Not Sucess";
   ?>