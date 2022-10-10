<?php

// User class which just contains a simple name that can be updated to the mysql db
class User {
  protected $name;

  public function __construct($nameIn) {
    $this -> name = $nameIn;
  }

  public function getName() {
    return $this -> name;
  }

}

?>