<?php include('pokemon.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
</head>
<body>
    <section class="dracaufeu">
        <img src="image/Dracaufeu.jpg" alt="">
        <?php $Dracaufeu = new Pokemon('Dracaufeu', 'feu','110','200');?>
        <p><?php echo "<br> Nom : " . $Dracaufeu->getNom();?></p>
        <p><?php echo "<br> Type : " . $Dracaufeu->getType();?></p>
        <p><?php echo "<br> Puissance d'attaque : " . $Dracaufeu->getPuissanceatk();?></p>
        <p><?php echo "<br> PV : " . $Dracaufeu->getPv();?></p>
    </section>
    <section class="tortank">
        <img src="image/Tortank.jpg" alt="">
        <?php $Tortank = new Pokemon('Tortank', 'eau','100','180');?>
        <p><?php echo "<br> Nom : " . $Tortank->getNom();?></p>
        <p><?php echo "<br> Type : " . $Tortank->getType();?></p>
        <p><?php echo "<br> Puissance d'attaque : " . $Tortank->getPuissanceatk();?></p>
        <p><?php echo "<br> PV : " . $Tortank->getPv();?></p>
    </section>
    
</body>
</html>