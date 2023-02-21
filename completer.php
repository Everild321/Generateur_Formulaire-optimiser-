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
    <h2>Modification du Formulaire</h2>
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
        </Select><br><br>
        <input type="hidden" name="type" />
     <input type="submit" name="ajouter" value="ajouter"/> 
    
     <a href="accueil.php"><input type="submit" value="Retour"></a>
</form>
    </div>
</body>
</html>