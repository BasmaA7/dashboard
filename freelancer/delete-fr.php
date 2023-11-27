<?php
include_once "../connexion/conx.php"; 
if (isset($_GET ['deleteID'])){
  $id=$_GET['deleteID'];

  $sql="delete from `freelancer`  where id=$id";
  $res=mysqli_query($conx,$sql);
 if($res ){
  header('location:Afficher-fr.php');
 }
else{
  die(mysqli_error($conx));
}
}
?>