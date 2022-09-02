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

    public function getTitle()
    {
        return $this->title;
    }

    public function getDirector()
    {
        return $this->director;
    }

    public function getHero()
    {
        return $this->hero;
    }
} ?>

<h2>
    <?php
        $movie1 = new Movie('Dune', 'Denis Villeneuve', 'Timothée Chalamet');
        echo $movie1->getTitle().': diretto da '.$movie1->getDirector().' con '.$movie1->getHero();
    ?>
</h2>

<h2>
    <?php
        $movie2 = new Movie('The Northman', 'Robert Eggers', 'Alexander Skarsgård');
        echo $movie2->getTitle().': diretto da '.$movie2->getDirector().' con '.$movie2->getHero();
    ?>
</h2>

<h2>
    <?php
        $movie3 = new Movie('Jin-Roh - Uomini e lupi', 'Hiroyuki Okiura', 'Yoshikatsu Fujiki');
        echo $movie3->getTitle().': diretto da '.$movie3->getDirector().' con '.$movie3->getHero();
    ?>
</h2>