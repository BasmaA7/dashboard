<?php
include_once '../connexion/conx.php';
$id=$_GET['deleteID'];
if(isset ($_POST['deleteID'])){
  $sql='delete into `souscategorie` where id= $id';
  $res=mysqli_query($conx,$sql);
  if($res){
    header('location:afficherSC.php');
  }
  else{
    die(mysqli_error($conx));
  }
}
?>