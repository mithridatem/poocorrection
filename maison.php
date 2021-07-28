<?php
   class Maison{
        /*-----------------------------------------------------
                            Attributs :
        -----------------------------------------------------*/
       public $nom;
       public $longueur;
       public $largeur;
       public $nbrEtage;
        /*-----------------------------------------------------
                            Méthodes :
        -----------------------------------------------------*/
        public function surface()
        {   
            $surface = $this->longueur*$this->largeur;
            return $surface;
        }
        public function surfaceV2()
        {   //test du nombre d'étage
            if($this->nbrEtage>1)
            {
                $surface = ($this->longueur*$this->largeur)*$this->nbrEtage;
                return $surface;
            }
            else
            {
                $surface = $this->longueur*$this->largeur;
                return $surface;
            }            
        }

   }


?>