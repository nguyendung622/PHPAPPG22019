<?php
class Book
{
    #Begin properties
    var $price;
    var $title;
    var $author;
    var $year;
    #end properties

    #Construct function
    function __construct($price, $title, $author, $year)
    {
        $this->price = $price;
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    #Member function
    function display()
    {
        echo "Price: " . $this->price . "<br>";
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}
