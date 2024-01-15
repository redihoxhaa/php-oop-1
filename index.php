<?php

class Movies
{
    public $title;
    public $year;
    public $genres;

    function __construct($_title, $_year, $_genres)
    {
        $this->title = $_title;
        $this->year = strval($_year);
        $this->genres = $_genres;
    }

    public function beforeMillenium()
    {
        if (intval($this->year) >= 2000) {
            $this->year .= " AM";
        } else {
            $this->year .= " BM";
        }
    }
}

$movie1 = new Movies("Il silenzio degli innocenti", 1991, 'Thriller');
$movie2 = new Movies("School Of Rock", 2004, ['Commedia', 'Musica']);

$movie1->beforeMillenium();
$movie2->beforeMillenium();


var_dump($movie1);
var_dump($movie2);
