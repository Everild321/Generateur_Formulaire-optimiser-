<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Generer</title>
</head>
<style>
    body{
        background-color: tomato;
    }
    h2{
        margin-top:50px;
       text-align:center;
    }
    .first{
        background-color: orange;
        width:500px;
        margin-top:100px;
        margin-left:400px;
    }
    .formulaire{
        margin-left:180px;
    }
    .button{
        margin-left:30px;
    }
    .button2{
        margin-left:-15px;
        padding:20px;
    }
    .center_prime{
        transform:translate(1050px,-380px);
        background-color: yellowgreen;
        width:300px;
        position:fixed;
    }
    .center_second{
        margin-left:80px;
    }

</style>
<body>
    <h2>Formulaire Generer</h2>
   <div class="first">
    <div class="formulaire">
                <?php
                $nomchamp=$_GET['nomchamp'];
                $typechamp=$_GET['typechamp'];
                $type=$_GET['type'];
                
        require_once ('formulaire.php');
    $file1="C:\\Site\\xampp\\htdocs\\Generateur_optimiser\\nomchamp.txt";
   $filew= fopen("$file1",'a');
    fwrite($filew,$nomchamp."\n");
    
    $file2="C:\\Site\\xampp\\htdocs\\Generateur_optimiser\\typechamp.txt";
    $filew= fopen("$file2",'a');
     fwrite($filew,$typechamp."\n");
    
     $file3="C:\\Site\\xampp\\htdocs\\Generateur_optimiser\\method.txt";
     $filew3= fopen("$file3",'a');
      fwrite($filew3,$type);
      
   $read1=file($file1);
   $read2=file($file2);
   $read3=file($file3);
   $j=0;
   $formulaire1=new Formulaire;
    for($i=0;$i<count($read1);$i++){
        for($i=0;$i<count($read2);$i++){
              
                $formulaire1->debut_soummission($read3[$j]);
                $formulaire1->ajouterlabel($read1[$i]);
                $formulaire1->ajouterinput($read2[$i]);
               
        }   
    }
    
        ?>
    <?php $formulaire1->fin_formulaire(); ?>
            <p class="button">
                <?php  $formulaire1->ajout_bouton('Soumettre'); echo"<br>"; ?>   
            </p>
            <p class="button2">
            <a href="completer.php">Completer</a> 
            <a href="accueil.php"><input type="submit" value="Retour"></a> 

            </p>
            
        </div>
        
   </div>
      
</body>
</html>