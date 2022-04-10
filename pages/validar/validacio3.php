<?php
$res1 = $_POST['res1'];
$res2 = $_POST['res2'];
$res3 = $_POST['res3'];
$res4 = $_POST['res4'];
$res5 = $_POST['res5'];
$suma=0;

if($res1 == 7){
  $suma=$suma+1;
}

if($res2 == -4){
  $suma=$suma+1;
}

if($res3 == "-9/6" or $res3 == "-1 3/6"){
  $suma=$suma+1;
}

if($res4 == "16/90" or $res4 == "8/45"){
  $suma=$suma+1;
}

if($res5 == "4/4" or $res5 == "1"){
  $suma=$suma+1;
}


echo '<script>alert("Tienes '.$suma.' aciertos de 5");</script>';
if($suma == 5){
    echo '<script> window.location="../bancoejercicio.html"; </script>';
}else{
    echo '<script> window.location="../ejercicio3.html"; </script>';
}
echo '<script> window.location="../ejercicio3.html"; </script>';
 ?>
