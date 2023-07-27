<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digite a Nota e a presença:</h1>
<form action="inicio.php" method="POST">
        Nota<input type="text" name="txt_nota">
        Presença<input type="text" name="txt_Pres">
        <input type="submit">
</form>
<?php
         $Nota=$_POST['txt_nota'];
         $Pres=$_POST['txt_Pres'];
         if($Nota == "MB" || $Nota =="B" || $Nota =="R" && $Pres >= 70){
            echo "Aprovado";
         }
         else if($Nota == "MB" || $Nota =="B" || $Nota =="R" && $Pres < 70){
            echo "Reprovado";
         }
         else if($Nota =="I" && $Pres < 70){
            echo "Reprovado";
         }
         else if($Nota ==""  && $Pres == "" || $Nota =="" || $Pres == ""){
            echo "Digite novamente";
         }
         else{
            echo "Reprovado";
         }
         
         
?>
</body>
</html>