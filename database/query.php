<?php

class QueryBuilder {
  // Protected database PDO connection object
  protected $databasePdo;

  // Constructor which takes an incoming connected PDO object
  public function __construct($incomingPdo) {
    $this->databasePdo = $incomingPdo;
  }

  // Search which uses the PDO object to make a query from the incomingSelectFrom table and returns a PDO::FETCH_OBJ type
  public function searchQuery($incomingSelectFrom) {
    $statement = $this->databasePdo->prepare('select * from ' . $incomingSelectFrom);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
  }
  // Statement for inserting with multiple generic parameters
  public function insertQuery($incomingTable, $incomingParameters) {

    // Get Array Keys only for generic insert
    $arrayKeys = array_keys($incomingParameters);
    // Imploded string from array of keys
    $arrayKeysImplodedString = implode(', ' , $arrayKeys);
    $genericWithColonString = ':' . implode(', :', $arrayKeys);

    $sqlInsert = sprintf('insert into %s (%s) values (%s)', $incomingTable, $arrayKeysImplodedString, $genericWithColonString );

    // Try and catch to deal with the preparation and execution of the sql query
    try {
      $statement = $this->databasePdo->prepare($sqlInsert);
      $statement->execute($incomingParameters);
    } catch (Exception $e) {
      softDebugDumper($e->getMessage());
    }
  }
}

?>