<?php
include ('connexion/conx.php');
 if(isset($_POST['submit'])){
  $name=$_POST['FullName'];
  $email=$_POST['Email'];
  $password = $_POST['Password'];

  $hashedPassword = password_hash($password);

  $verifier= mysqli_query($cnx, "SELECT Email FROM users WHERE Email='$email'");
  $sql="INSERT INTO `user`(FullName,Password,Email) VALUES ('$name,'$email'$password')";
 
if((mysqli_num_rows($verifier) != 0)){
  echo 'Cet e-mail est déjà utilisée, <br> Essayer un autre.';
}else{
  $res=mysqli_query($conx,$sql);
 
}
 }


