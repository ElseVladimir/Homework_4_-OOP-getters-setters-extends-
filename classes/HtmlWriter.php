<?php


class HtmlWriter
{
    public function writeHtmlFood(Food $foodz)
    {
        $get = '<div>';
        $get .= "<ol>";
        $get .= "<li> Name: ".$foodz->getName()."</li>";
        $get .= "<li> Price: ".$foodz->getPrice()."</li>";
        $get .= "<li> Ingredients: ".$foodz->getIngr()."</li>";
        $get .= "<li> Weight: ".$foodz->getWeight()."</li>";
        $get .= "</ol>";
        $get .= '</div>';
        return $get;
    }
}