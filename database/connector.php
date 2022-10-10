<?php

// Generic ConnectorDB class to connect to mySql database
class ConnectorDB {
  // Protected database PDO object
  protected $database;

  // Make connection will initialize the PDO database connection object, returning an associate array with values
  public function makeConnection($config) {
    try {
      $this->database = new PDO($config['connection'].';dbname='.$config['name'], $config['username'], $config['password'], $config['options']);
      return [
        'status' => true,
        'database' => $this->database
      ];
    } catch(PDOException $e) {
      return [
        'status' => false,
        'database' => $e->getMessage()
      ];
    }
  }

  // Associated getter function for the protected PDO object
  public function getDatabase() {
    return $this->database;
  }
}

?>