<?php
    class Vehicule{
         /*-----------------------------------------------------
                            attributs :
        -----------------------------------------------------*/
        /**
         *  @var string tag utilisé le nom du véhicule
         */
        private $nomVehicule ;
        /**
         * @var int tag utilisé pour le nombre de roues du véhicule
         */
        private $nbrRoue;
        /**
         * @var int tag utilisé pour stocker la vitesse du véhicule
         */
        private $vitesse ;
        /*-----------------------------------------------------
                            constucteur :
        -----------------------------------------------------*/        
        /*-----------------------------------------------------
                        Getter and Setter :
        -----------------------------------------------------*/
        //getter nomVehicule
        public function getNomVehicule()
        {
            return $this->nomVehicule;
        }
        //setter nomVehicule
        public function setNomVehicule($new_nom_vehicule)
        {
            $this->nomVehicule = $new_nom_vehicule;
        }
        //getter nbrRoue
        public function getNbrRoue()
        {
            return $this->nbrRoue;
        }
        //setter nbrRoue
        public function setNbrRoue($new_nbr_roue)
        {
            $this->nbrRoue = $new_nbr_roue;
        }
        //getter vitesse
        public function getVitesse()
        {
            return $this->vitesse;
        }
        //setter vitesse
        public function setVitesse($new_vitesse)
        {
            $this->vitesse = $new_vitesse;
        }
        /*-----------------------------------------------------
                            Fonctions :
        -----------------------------------------------------*/
        //fonction demarrer le vehicule
        public function demarrer(){
            $demarrage = '<p>Démarrage de la '.$this->getNomVehicule().'Vrooom !!!!</p>';
            return $demarrage;
        }
        /**
         * @return string $result retourne le type de véhicule
         */
        //fonction détection du type de véhicule
        public function detect(){
            //récupération du nombre de roues de l'objet
            $nbrRoue = $this->getNbrRoue();
            //test si c'est une voiture
            if($nbrRoue == 4){
                $result ='<p>c\'est une voiture</p>';
                return $result;
            }
            //test si c'est une moto
            if($nbrRoue == 2){
                $result = '<p>c\'est une moto</p>';
                return $result;
            }
        }
        /**
         * augmente la valeur de la vitesse de 50
         */
        //fonction ajouter 50 à la vitesse d'un véhicule
        public function boost(){
            $vitesse = $this->getVitesse();
            $vitesse +=50;
            $this->setVitesse($vitesse);
        }        
    }
    /**
     * @param $a objet véhicule 1, 
     * @param $b objet véhicule 2,
     * @return string $result retourne le véhicule le plus rapide
     */
    //fonction qui retourne le véhicule le plus rapide
    function plusRapide($a,$b){
        $vehicule1 = $a->getNomVehicule();
        $vehicule2 = $b->getNomVehicule();
        $result="";
        //test de la vitesse
        if($a->getvitesse()>$b->getVitesse())
        {   $result ="<p>le véhicule le plus rapide est la : $vehicule1</p>";
            return $result;
        }
        else{
            echo "<p>le véhicule le plus rapide est la : $vehicule2</p>";
        }
    } 
?>