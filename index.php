<?php
$gender = 'femmme' //definition de la variable
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice 5</title>
   </head>
   <body>
     <p>


<?php
//défintions de la condition
if ($gender == 'femme')
{
  echo 'C\'est une développeuse !!!';
} else {
  echo 'C\'est un développeur !!!';
}
?>
    </p>
   </body>
 </html>
