<?php
class Movie
{
    public $title;
    public $director;
    public $hero;

    function __construct($_title, $_director, $_hero)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->hero = $_hero;
    }

    public function getMovie()
    {
        echo $this->title . ': diretto da ' . $this->director . ' con ' . $this->hero;
    }
} ?>

<h2>
    <?php
        $movie1 = new Movie('Dune', 'Denis Villeneuve', 'Timothée Chalamet');
        $movie1->getMovie();
    ?>
</h2>

<h2>
    <?php
        $movie2 = new Movie('The Northman', 'Robert Eggers', 'Alexander Skarsgård');
        $movie2->getMovie();
    ?>
</h2>

<h2>
    <?php
        $movie3 = new Movie('Jin-Roh - Uomini e lupi', 'Hiroyuki Okiura', 'Yoshikatsu Fujiki');
        $movie3->getMovie();
    ?>
</h2>
