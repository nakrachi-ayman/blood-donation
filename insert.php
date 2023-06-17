<?php
require("cnx.php");
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$ville=$_POST['ville'];
$tb=$_POST['tb'];
$time=$_POST['time'];

$sth=$conn->prepare("insert into donor(firstname,lastname,email,tel,ville,tb,time)
 values(:nom,:prenom,:email,:tel,:ville,:tb,:time)");

$sth->bindparam(':nom',$nom);
$sth->bindparam(':prenom',$prenom);
$sth->bindparam(':email',$email);
$sth->bindparam(':tel',$tel);
$sth->bindparam(':ville',$ville);
$sth->bindparam(':tb',$tb);
$sth->bindparam(':time',$time);
$sth->execute();
header('location:insc.php');
?>