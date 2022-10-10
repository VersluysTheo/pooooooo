<?php

// Class Aventurier
class Aventurier{
    protected int $atk;
    protected int $vie;
    public const ROLE ="Aventurier";
    

    public function Getatk(){
        return $this->atk;
    }

    public function Getvie(){
        return $this->vie;
    }
}
?>