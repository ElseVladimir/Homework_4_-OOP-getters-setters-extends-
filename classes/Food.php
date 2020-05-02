<?php


class Food
{
protected $name = '';
protected $price = 0;
protected $ingredients = '';
protected $weight = 0;

public function __construct($name, $price, $ingredients, $weight)
{
    $this->name = $name;
    $this->price = $price;
    $this->ingredients = $ingredients;
    $this->weight = $weight;
}

public function getName(){
    return $this->name;
}
public function getPrice(){
    return $this->price;
}
public function getIngr(){
    return $this->ingredients;
}
public function getWeight(){
    return $this->weight;
}

    public function setFoodName($name){
    $this->name = $name;
}

public function getFoodName(){
    $inf = '<div>';
    $inf .= '<ul>'.'<li>'.$this->name.'</li>'.'</ul>';
    $inf .= '</div>';
    return $inf;
}
public function setFullInfo($name, $price, $ingredients, $weight){
    $this->name = $name;
    $this->price = $price;
    $this->ingredients = $ingredients;
    $this->weight = $weight;
}

public function getFullInfo(){
    $info = '<div>';
    $info .= '<ul>';
    $info .= '<li> Name: '.$this->name.'</li>';
    $info .= '<li> Price: '.$this->price.' UAH'.'</li>';
    $info .= '<li> Ingredients: '.$this->ingredients.'</li>';
    $info .= '<li> Weight: '.$this->weight.' Gr'.'</li>';
    $info .= '</ul>';
    $info .= '</div>';
    return $info;
}
}