<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


    
    
    <?php
       include 'cnx.php';
        $sql2 = $cnx->prepare("delete from compte where date ='2018-12-28' ");
        // on l'execute
       $sql2->execute();
       $sql1 = $cnx->prepare("select * from compte where date > CURDATE() - INTERVAL 30 day");
        // on l'execute
        $sql1->execute();
        
   // header('Location: http://localhost/projetperso/compte/PHP/index.php');
     //   exit;

     
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