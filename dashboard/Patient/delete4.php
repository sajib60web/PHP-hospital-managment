<?php
include("../inc/connect.php") ;
if(isset($_POST['submit']))
      {
      	$set=$_POST['box'];
     //print_r($set); exit();
     foreach ($set as $k) {
     	$s="DELETE FROM patientregister WHERE  id='".$k."'";
     	//echo "string"; exit;
     	mysql_query($s)or die (mysql_error($db_connect));
     	
     }
       
      //print_r($sql);
       // $write=mysql_fetch_array($sql) or die(mysql_error($db_connect));
            
              header("location:patient.php");
      }
      else
        if(isset($_POST['active']))
      {
        $set=$_POST['box'];
     //print_r($set); exit();
     foreach ($set as $k) 
     {
      $s="UPDATE patientregister SET status='1' WHERE id='".$k."'";
  //echo $s; exit;
      mysql_query($s)or die (mysql_error($db_connect));
      
     }
       
      //print_r($sql);
       // $write=mysql_fetch_array($sql) or die(mysql_error($db_connect));
            
              header("location:patient.php");
      }
      else
        if(isset($_POST['inactive']))
      {
        $set=$_POST['box'];
     //print_r($set); exit();
     foreach ($set as $k) 
     {
      $s="UPDATE patientregister SET status='0' WHERE id='".$k."'";
  //echo $s; exit;
      mysql_query($s)or die (mysql_error($db_connect));
      
     }
       
      //print_r($sql);
       // $write=mysql_fetch_array($sql) or die(mysql_error($db_connect));
            
              header("location:patient.php");
      }
      else
        echo "Not Sucess";
?>