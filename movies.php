<?php

class Movie {
    public $name;
    public $releaseYear;
    public $isRecent;
    public $genre;
  
    function __construct($name, $releaseYear, $genre) {
      $this->name = $name;
      $this->releaseYear = $releaseYear;
      $this->genre = $genre;
    }
    function setIsRecent() {
        if($this->releaseYear == 2022){
            $this->isRecent = true;
        } else {
            $this->isRecent = false;
        }
    }
    function getReleaseYear() {
      return $this->releaseYear;
    }
  }

$morbius = new Movie("morbius", 2022, "superhero");
$morbius->setIsRecent();
echo json_encode($morbius);

$endOfEvangelion = new Movie("The End Of Evangelion", 1997, "depression");
$endOfEvangelion->setIsRecent();
echo json_encode($endOfEvangelion);