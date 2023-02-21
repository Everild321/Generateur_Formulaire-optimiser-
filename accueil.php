<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<style>
    body{
        background-color:tomato;
    }
h2{
    text-align: center;
    margin-top:50px;
}
.group{
    background-color:orangered;
    margin-left:500px;
    margin-top:100px;
    width:300px;
}
.center{
    margin-left:60px;
    padding:20px;
}
</style>
<body>
    <h2>Conceptualisation du formulaire</h2>
    <div class="group">
    <form action="generer.php" method="get" class="center">
        <Label for="">Nom du champ à ajouter: </label> <br> <br>
       <input type="text" name="nomchamp" /><br><br>
       <Label for="">Type du champ à ajouter: </label><br> <br>
       <Select type="text" name="typechamp">
        <option>text</option>
        <option>checkbox</option>
        <option>email</option>
        <option>password</option>
        <option>number</option>
        <option>radio</option>
        </Select><br><br>
       <Label for="">choisir la methode de traitement: </label><br><br>
       <Select type="text" name="type">
        <option>Post</option>
        <option>Get</option>
        </Select><br> <br>
     <input type="submit" name="submit"/> 
</form>
<?php

?>
    </div>
</body>
</html>