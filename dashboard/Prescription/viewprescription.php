<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php
include("../inc/connect.php") ;


// $query=mysql_query("SELECT * FROM addappointment  WHERE patient='".$_GET['id']."'")or die (mysql_error($db_connect));
// $numrows=mysql_num_rows($query)or die (mysql_error($db_connect));
// $row1=mysql_fetch_all($query);

$query1=mysql_query("SELECT * FROM addnewpres WHERE patient='".$_GET['id']."'")or die (mysql_error());
$numrows1=mysql_num_rows($query1)or die (mysql_error($db_connect));
$p_row=mysql_fetch_all($query1);

$query2=mysql_query("SELECT * FROM patientregister WHERE id='".$_GET['id']."'")or die (mysql_error());
$numrows2=mysql_num_rows($query2)or die (mysql_error($db_connect));
$p_row1=mysql_fetch_all($query2);


/*$file_query=mysql_query("SELECT * FROM addfiles")or die (mysql_error());
$file_numrows=mysql_num_rows($file_query)or die (mysql_error());
$file_row1=mysql_fetch_all($file_query);*/

function mysql_fetch_all($query) {
    $all = array();
    while ($all[] = mysql_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//print_r($p_row); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
Prescription
<small></small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Dashboard</li>
</ol>
</section>

<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
<div class="col-xs-12">
    <div class="box box-primary">
            <div class="box-header with-border">
             <i class="fa fa-book"></i> <h3 class="box-title">Prescription</h3>
            </div>
             <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
            <div class="col-md-12"><div class="col-md-4">
         
             <td>Patient</td>
           
         </div><!-- 
         <div class="col-md-4"><td>Doctor</td></div> -->
         <div class="col-md-4"><td>Prescription Info</td>

         </div>
       </div>
       <?php
         // print_r($p_row1[0]['name']);exit;
     foreach ($p_row as $row)
      {

?> <tr>
  <td>Name: <?php echo $p_row1[0]['name'];  ?><br>
    Phone: <?php echo $p_row1[0]['phone']; ?>
  </td>
<!--    <td>Name: <?php echo $p_row1[0]['doctor']; ?> -->
</td>
<td>Date: <?php echo $row['date']; ?>
</td>
 </tr>
<?php } ?> 

<?php
     foreach ($p_row as $row)
      {
?>
<tr>
  
<th>
<div style="height: 100px;">
  History </div>
</th>
<td><?php echo $row['history'];  ?></td>
</tr> 
<tr>
 <tr>
<th>
    <div style="height: 100px;">
  Medication</div></th>
<td> <?php echo $row['medication']; ?>
</td></tr>
  <tr>
<th>
    <div style="height: 100px;">
Note</div></th>
<td> <?php echo $row['note']; ?>
</td></tr> 
  </tr>
<?php } ?>
</table>
<center>
<button type="button" onclick=" window.print();" name="name" class="btn btn-success"><i class="fa  fa-print"></i>  Print</button></center>
           </div>
          

              </div>
    </div>
  </div>
   
    </section>
    
  </div>
<?php include "../Include/footer.php";?>