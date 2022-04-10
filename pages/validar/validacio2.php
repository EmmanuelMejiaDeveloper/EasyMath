<?php
$res1 = $_POST['res1'];
$res2 = $_POST['res2'];
$res3 = $_POST['res3'];
$res4 = $_POST['res4'];
$res5 = $_POST['res5'];
$res6 = $_POST['res6'];
$suma=0;

if($res1 == 887503681 or $res1 == "887,503,681"){
  $suma=$suma+1;
}

if($res2 == 14){
  $suma=$suma+1;
}

if($res3 == 18){
  $suma=$suma+1;
}

if($res4 == 16.3){
  $suma=$suma+1;
}

if($res5 == 6){
  $suma=$suma+1;
}

if($res6 == 36.9047 or $res6 == 36.90 or $res6 == 36){
  $suma=$suma+1;
}




echo '<script>alert("Tienes '.$suma.' aciertos de 6");</script>';
if($suma == 6){
    echo '<script> window.location="../ejercicio3.html"; </script>';
}else{
    echo '<script> window.location="../ejercicio2.html"; </script>';
}

 ?>
