<?php
class Moine extends Aventurier{

    public function __construct()
    {
        $this->atk = rand(10,20);
        $this->vie = rand(70,120);
    }

    public function Punch($cible){
        $cible->vie = $cible->vie - 15;
    }
}
?>