<?php


class HtmlWriter
{
    public function writeHtmlFood(Food $foodz)
    {
        $get = '<div>';
        $get .= "<ul>";
        $get .= "<li> Name: ".$foodz->getName()."</li>";
        $get .= "<li> Price: ".$foodz->getPrice().' UAH'."</li>";
        $get .= "<li> Ingredients: ".$foodz->getIngr()."</li>";
        $get .= "<li> Weight: ".$foodz->getWeight().' Gr'."</li>";
        $get .= "</ul>";
        $get .= "<hr>";
        $get .= '</div>';
        return $get;
    }

    public function writeHtmlDrink(Drink $drinkz)
    {
        $get = '<div>';
        $get .= "<ul>";
        $get .= "<li> Name: ".$drinkz->getfullName()."</li>";
        $get .= "<li> Price: ".$drinkz->getPrice().' UAH'."</li>";
        $get .= "<li> Volume: ".$drinkz->getVolume().' Ml'."</li>";
        $get .= "</ul>";
        $get .= "<hr>";
        $get .= '</div>';
        return $get;
    }
}