<?php

// aqui
$para=$_POST['para'];
$titulo=$_POST['titulo'];
$message=$_POST['message'];


  #Valid password, user wants to send mail he's written
  mail($to, $subject, stripslashes($body), "From: $fromaddr\n", "-f$fromaddr");
  header("Location: inndex.php");
  //aqui


?>