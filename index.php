<?php 
  include 'antimat.php';

  $am=new antimat();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Antimat</title>
</head>
<body>
   <p>
       Hello <mark>word</mark>!
   </p>
   
   <p>
       <?php
            echo $am->repmark('Валера','Привет, Валера, как живешь?');
       
       ?>
   </p>
   
    
</body>
</html>