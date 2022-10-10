<?php
class Voleur extends Aventurier{

    public function __construct()
    {
        $this->atk = rand(25,30);
        $this->vie = rand(50,80);
    }

    public function crit(){
        $this->atk = $this->atk * random_int(1,2);
    }
}
?>