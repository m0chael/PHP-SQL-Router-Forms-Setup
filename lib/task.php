<?php

// Todo list tasks with completed flag and description, with some getters and setters
class Task {
  protected $description;
  protected $completed = false;

  public function __construct($descriptionIn, $isCompletedIn) {
    $this -> description = $descriptionIn;
    $this -> completed = $isCompletedIn;
  }

  public function getDescription() {
    return $this -> description;
  }

  public function isComplete() {
    return $this -> completed;
  }

  public function setCompleted() {
    $this -> completed = true;
    return true;
  }
}

?>