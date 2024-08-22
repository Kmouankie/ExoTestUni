<?php
namespace App\Calcul;

class Addition {

    public function add($elements){
        $somme = 0;
        foreach($elements as $element){
            $somme = $somme + $element;
        }
        return $somme;
    }
}