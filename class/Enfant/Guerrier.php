<?php
class Guerrier extends Aventurier{

    private $vieMax = 120;

    public function __construct()
    {
        $this->atk = rand(15,20);
        $this->vie = $this->randoomVie();
    }

    public function randoomVie(){
        return rand(85,$this->vieMax);
    }

    public function hurler(){
        $this->atk = $this->atk + 10;
    }

}
?>
