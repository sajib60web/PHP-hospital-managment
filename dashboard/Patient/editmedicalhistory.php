<?php include"../Include/header.php";?>
<?php include"../Include/sidebar.php";?>
<?php 
  include("../inc/connect.php") ;
  
    //session_start();
  $sql="SELECT * FROM addmedicalhistory WHERE id='".$_GET['id']."'";
  $w =mysql_query($sql) or die(mysql_error($db_connect));
 // print_r($sql); exit;
    $row=mysql_fetch_array($w)or die (mysql_error($db_connect));
    $date=$row['date'];
     $patient=$row['patient'];
    $description=$row['description'];
   
   //print_r($row); exit;
   //echo "$firstname"; exit();
?>
<?php
//include("../inc/connect.php") ;
//echo "string"; exit();
//session_start();
if(isset($_POST['submit']))

{//print_r($_POST['description']); exit();
 //print_r($_POST); exit();
//echo "string"; exit();
    $date=$_POST['date'];
    $patient=$_POST['patient'];
    $description=$_POST['description'];
    
    $write =mysql_query("UPDATE addmedicalhistory SET date='$date',patient='$patient',description='$description' WHERE id='".$_GET['id']."'") or die(mysql_error());
      //$query=mysql_query("SELECT * FROM user ")or die (mysql_error());
      //$numrows=mysql_num_rows($query)or die (mysql_error());
      echo " <script>setTimeout(\"location.href='../Patient/casehistory.php';\",150);</script>";
    }
      

?>

<?php

$p_query=mysql_query("SELECT * FROM patientregister")or die (mysql_error());
$p_numrows=mysql_num_rows($p_query)or die (mysql_error());
$p_row1=mysql_fetch_all($p_query);



/*$file_query=mysql_query("SELECT * FROM addfiles")or die (mysql_error());
$file_numrows=mysql_num_rows($file_query)or die (mysql_error());
$file_row1=mysql_fetch_all($file_query);*/

function mysql_fetch_all($query) {
    $all = array();
    while ($all[] = mysql_fetch_assoc($query)) {$temp=$all;}
    return $temp;
}
//print_r($row1); exit;
//$row1[]=mysql_fetch_assoc($query)or die (mysql_error());
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Medical History 
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
<div class="col-md-12">
<div class="box box-primary">
<div class="box-header with-border">
<i class="fa fa-book"></i> <h3 class="box-title">Edit Medical History</h3>
</div>
</div>
<div class="box box-primary">
<div class="box-header with-border">
<form method="POST" >
              <label >Date</label>
              
                 <input type="date" name="date" class="form-control" id="exampleInputPassword1" placeholder="" value="<?php echo $date  ?>"><br>
                <label >Patient</label><?php $row['patient']; ?>
                 <select name="patient" class="form-control" id="exampleInputPassword1" placeholder="">
                  
                  <?php foreach ($p_row1 as $p) {?>
                    <option value="<?php echo $p['id'];?>"> <?php  echo $p['name'];?></option>
                  <?php } ?>
                </select><br>
                
                <div class="form-group">

                  <label for="exampleInputPassword1">Description</label>
          <textarea id="editor1" name="description" style="width:50px;" class="form-control">
             <?php  echo $description; ?>
        </textarea>
      </div>
        <button type="submit"  name="submit" class="btn btn-primary">Update</button>
         </form>
      </div>
    </div>
  </div>
</div>
</section>
</div>
<?php include "../Include/footer.php";?>
<script src="../bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(function () { 
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
  </script>