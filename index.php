<?php

class Movies
{
    public $title;
    public $year;

    function __construct($_title, $_year)
    {
        $this->title = $_title;
        $this->year = $_year;
    }

    public function beforeMillenium()
    {
        if ($this->year >= 2000) {
            $this->year .= " AM";
        } else {
            $this->year .= " BM";
        }
    }
}

$movie1 = new Movies("Il silenzio degli innocenti", 1991);
$movie2 = new Movies("School Of Rock", 2004);

$movie1->beforeMillenium();
$movie2->beforeMillenium();


var_dump($movie1);
var_dump($movie2);
