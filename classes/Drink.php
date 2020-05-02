<?php


class Drink extends Food
{
protected $volume = 0;

public function setDrinkName($name){
    $this->name = $name;
}

public function getDrinkName(){
    $inf = '<div>';
    $inf .= '<ul>'.'<li>'.$this->name.'</li>'.'</ul>';
    $inf .= '</div>';
    return $inf;
}
}