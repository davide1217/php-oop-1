<?php

class Movie {

  public $title;
  public $description;
  public $producedBy;
  public $rating;

  public function __construct($_title, $_description, $_vote){
    $this->title = $_title;
    $this->description = $_description;
    $this->rating = $this->getRating($_vote);
  }

  public function getRating($_vote){
    if ($_vote < 3) {
      return 'bad';
    } 
    elseif($_vote > 3 && $_vote < 4) {
      return 'good';
    } 
    else {
      return 'excellent';
    }
  }
  
}


?>