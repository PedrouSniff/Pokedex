<?php 

class Pokemon{

    // ATTRIBUTS
    
    private $nom;
    private $puissanceatk;
    private $type;
    private $pv;


    // // CONSTRUCTEURS

    function __construct($nom,$type,$puissanceatk,$pv){

        $this->nom = $nom;

        $this->type = $type;

        $this->puissanceatk = $puissanceatk;

        $this->pv = $pv;

    }

    // Nom

    public function getNom(){
        return $this->nom;
    }
    
    public function setnom($nom){
        $this->nom = $nom;
    }

    // Puissance d'attaque

    public function getPuissanceatk(){
        return $this->puissanceatk;
    }
    
    public function setPuissanceatk($puissanceatk){
        $this->puissanceatk = $puissanceatk;
    }

    // Type

    public function getType(){
        return $this->type;
    }
    
    public function setType($type){
        $this->type = $type;
    }

    // PV

    public function getPv(){
        return $this->pv;
    }
    
    public function setPv($pv){
        $this->pv = $pv;
    }
  
    // METHODES

    public function attaquer($cible){
        echo $this->nom . " attaque " . $cible->getNom() . " avec une puissance de " . $this->puissanceatk . " !<br>";
        $cible->recevoirDegats($this->puissanceatk);   
    }

    public function recevoirDegats($degats){
        $this->pv = $this->pv - $degats;
        if ($this->pv <= 0){
            $this->pv = 0;
            echo $this->nom . " a été mis K.O !";
        }else{
            echo $this->nom . " a maintenant " . $this->pv . " PV restants." ;
        }
    }

    public function combat($cible){
        if ($this->pv > 0){
            $this->attaquer($cible);
        }else {
            echo $this->nom . "le combat est fini !";
        }
    }
}