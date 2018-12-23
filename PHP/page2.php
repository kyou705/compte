<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


    <form action='page2.php' method="POST">
    <label> Balance </label>
    <p>date<p><input type="date" name="nom" value="<?php $date ?>" /></p></p>
    <p>pierre<p><input type="radio" name="pierre" value="<?php $pierre ?>" /></p></p>
    <p>angelina<p><input type="radio" name="angelina" value="<?php $angelina ?>" /></p></p>
    <p>montant<p><input type="TEXT" name="ancienReleve" value="<?php $montant ?>" /></p></p>
    <input type="submit" value ="Inserer">
    </form>
    
    <?php
if(isset($_POST['nouveaureleve']))
            { 
            $id=$_POST['id'];
            $releve=$_POST['nouveaureleve'];
            $identifiant=$_POST['identifiant'];
            $sql1 = $cnx->prepare("update client SET ancienReleve=dernierReleve,dernierReleve='$releve' where identifiant='$identifiant'");
            $sql1->execute();
            
            $sql = $cnx->prepare("select client.nom,client.prenom,ancienReleve,dernierReleve,idcontroleur,identifiant,id from client,controleur where client.idcontroleur=controleur.id and idcontroleur ='".$_GET['param3']."'");
            $sql->execute();
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            }
        
    ?>

</body>
</html>