<?php


class HtmlWriter
{
    public function writeHtmlHotelRoom(HotelRoom $hroom)
    {
        $get = '<div>';
        $get .= "<ol>";
        $get .= "<li> Address: ".$hroom->address."</li>";
        $get .= "<li> Price: ".$hroom->price. "</li>";
        $get .= "<li> Description: ".$hroom->description. "</li>";
        $get .= "<li> Room number: ".$hroom->roomNumber . "</li>";
        $get .= "</ol>";
        $get .= '</div>';
        return $get;
    }
}