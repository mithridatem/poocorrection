<?php
    /*-----------------------------------------------------
                            Maison :
        -----------------------------------------------------*/
        include './maison.php';
        $maison = new Maison();
        //affectation des valeurs
        $maison->nom = "villa";
        $maison->longueur = 25;
        $maison->largeur = 19;
        $maison->nbrEtage = 11;
        $surface = $maison->surfaceV2();
        echo "<p>la surface de la $maison->nom est égale à : $surface m2</p>";
    /*-----------------------------------------------------
                            Vehicule :
        -----------------------------------------------------*/
    //appel du fichier class.php qui contient la classe Vehicule
    //require est équivalent à include
    include './vehicule.php';
    //création d'un nouveau véhicule depuis la classe Vehicule
    $voiture = new Vehicule();
    //ajout de valeur aux attributs de la classe Vehicule
    $voiture->nomVehicule = "Audi A3";
    $voiture->nbrRoue = 4;
    $voiture->vitesse = 250;
    //utilisation de la méthode démarrer
    $voiture->demarrer();
    
    $moto = new Vehicule();
    $moto->nomVehicule = "Honda";
    $moto->nbrRoue = 2;
    $moto->vitesse = 280;
    $detect1 = $moto->detect();
    $detect2 = $voiture->detect();

    echo"$detect1";
    echo"$detect2";
    
    $voiture->boost();
    $moto->boost();
    echo"<p>$voiture->vitesse</p>";
    echo"<p>$moto->vitesse</p>";
    $rapid =plusRapide($moto, $voiture);    
    echo "$rapid";
?>