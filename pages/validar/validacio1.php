<?php
$res1 = $_POST['res1'];
$res2 = $_POST['res2'];
$res3 = $_POST['res3'];
$res4 = $_POST['res4'];
$res5 = $_POST['res5'];
$res6 = $_POST['res6'];
$res7 = $_POST['res7'];
$suma=0;

if($res1 == 56){
  $suma=$suma+1;
}

if($res2 == 14){
  $suma=$suma+1;
}

if($res3 == 625){
  $suma=$suma+1;
}

if($res4 == 7.5){
  $suma=$suma+1;
}

if($res5 == "6/8"){
  $suma=$suma+1;
}

if($res6 == 55){
  $suma=$suma+1;
}

if($res7 == 6){
  $suma=$suma+1;
}

echo '<script>alert("Tienes '.$suma.' aciertos de 7");</script>';
if($suma == 7){
    echo '<script> window.location="../ejercicio2.html"; </script>';
}else{
    echo '<script> window.location="../ejercicio1.html"; </script>';
}
 ?>
