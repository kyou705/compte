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
        include 'cnx.php';
        echo "Comptes";
        echo "<br>"; 
        echo "<br>"; 
        $id=1;
        $date = date("Y-m-d");
        
        Print("Nous sommes le $date");
        // écrire la requete
        $sql = $cnx->prepare("INSERT INTO compte (`id`, `montant`, `date`) VALUES ('$id', '37', '$date')");
        // on l'execute
        $sql->execute();

        $sql1 = $cnx->prepare("select * from compte");
        // on l'execute
        $sql1->execute();

        foreach($sql1->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<table>";
            echo "<tr>";
           // echo "montant";
            echo "<td>".$ligne['montant']."</td>";
            echo "<td>";
           // echo "date";
            echo "<td>".$ligne['date']."</td>";
            echo "<td>";
            echo "<td>";
            echo "<td>".$ligne['id']."</td>";
            echo "<td>";
            //echo '<a href="page2.php?param3='.$ligne['id'].'"> Tous les clients</a>';
            echo "</td>";
            echo "</tr>";
            echo "</table>";
        }
        
    ?>

</body>
</html>