<?php

class Movie {
    public $name;
    public $releaseYear;
    public $isRecent;
  
    function __construct($name, $releaseYear) {
      $this->name = $name;
      $this->releaseYear = $releaseYear;
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

$morbius = new Movie("morbius", 2022, false);
$morbius->setIsRecent();

$endOfEvangelion = new Movie("The End Of Evangelion", 1997, false);
$endOfEvangelion->setIsRecent();

var_dump($morbius);
var_dump($endOfEvangelion);