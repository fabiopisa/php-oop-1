<!-- - create un file index.php
- includete una classe “Movie”
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
BONUS:
1 Utilizzare almeno una proprietà e un metodo privato
2 Utilizzare almeno una proprietà e un metodo statico -->
<?php

 class Movie {
   public $title;
   public $genre;
   private $vote;
   static $counter = 0;
   

   public function __construct($_title, $_genre,$_vote)
   {
     $this->title = $_title;
     $this->genre = $_genre;
     $this->vote = $this->setVoteCalc($_vote);
     self::$counter++;
   }

   private function setVoteCalc($_vote){
    return $_vote * 10;
   }

   public function getVote(){
     return $this->vote;
   }
   static function getCounter(){
     return self::$counter;
   }
 }

?>