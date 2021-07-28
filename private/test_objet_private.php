<?php
    //appel du fichier class.php qui contient la classe Vehicule
    //require est équivalent à include
    include './vehicule_private.php';
    //création d'un nouveau véhicule depuis la classe Vehicule
    $voiture = new Vehicule();
    //ajout de valeur aux attributs de la classe Vehicule
    $voiture->setNomVehicule("Audi A3");
    $voiture->setNbrRoue(4);
    $voiture->setVitesse(250);
    //utilisation de la méthode démarrer
    $demarrer = $voiture->demarrer();
    echo "$demarrer";
    $moto = new Vehicule();
    $moto->setNomVehicule("Honda");
    $moto->setNbrRoue(2);
    $moto->setVitesse(280);

    $detect1 = $moto->detect();
    $detect2 = $voiture->detect();

    echo"$detect1";
    echo"$detect2";
    
    $voiture->boost();
    $moto->boost();
    echo'<p>la voiture va à : '.$voiture->getVitesse().' km/h</p>';
    echo'<p>la moto va à : '.$moto->getVitesse().' km/h</p>';
    
    
    $rapid =plusRapide($moto, $voiture);    
    echo "$rapid";
    
?>