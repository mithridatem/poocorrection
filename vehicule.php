<?php
    class Vehicule{
         /*-----------------------------------------------------
                            attributs :
        -----------------------------------------------------*/
        /**
         *  @var string tag utilisé le nom du véhicule
         */
        public $nomVehicule ;
        /**
         * @var int tag utilisé pour le nombre de roues du véhicule
         */
        public $nbrRoue;
        /**
         * @var int tag utilisé pour stocker la vitesse du véhicule
         */
        public $vitesse ;
        /*-----------------------------------------------------
                            Constructeur :
        -----------------------------------------------------*/

        /*-----------------------------------------------------
                            Getter and Setter :
        -----------------------------------------------------*/

        /*-----------------------------------------------------
                            Fonctions :
        -----------------------------------------------------*/
        //fonction demarrer le vehicule
        public function demarrer(){
            echo "<p>Démarrage de la $this->nomVehicule Vrooom !!!!</p>";
        }
        /**
         * @return string $result retourne le type de véhicule
         */
        //fonction détection du type de véhicule
        public function detect(){
            //récupération du nombre de roues de l'objet
            $nbrRoue = $this->nbrRoue;
            //test si c'est une voiture
            if($nbrRoue == 4){
                $result ='<p>c\'est une voiture</p>';
                return $result;
                //echo '<p>c\'est une voiture</p>';
            }
            //test si c'est une moto
            if($nbrRoue == 2){
                $result = '<p>c\'est une moto</p>';
                return $result;
                //echo '<p>c\'est une moto</p>';
            }
        }
        //fonction ajouter 50 à la vitesse d'un véhicule
        public function boost(){
            $this->vitesse+=50;
        }        
    }
    /**
     * @param $a objet véhicule 1, 
     * @param $b objet véhicule 2,
     * @return string $result retourne le véhicule le plus rapide
     */
    //fonction qui retourne le véhicule le plus rapide
    function plusRapide($a,$b){
        $vehicule1 = $a->nomVehicule;
        $vehicule2 = $b->nomVehicule;
        $result="";
        //test de la vitesse
        if($a->vitesse>$b->vitesse)
        {   $result ="<p>le véhicule le plus rapide est : $vehicule1</p>";
            return $result;
        }
        else{
            echo "<p>le véhicule le plus rapide est : $vehicule2</p>";
        }
    } 
?>