<?php

// Tasks and names which are passed to the view directly
$tasks = [];
$names = [];

// Checks the resulting associate array to see if the status connected properly, otherwise softDebugDumper with the resulting error
if (AppConfiguration::get('databaseConnected')['status']){

  $searchResults = AppConfiguration::get('databaseQueryBuilder')->searchQuery('todos');
  // Loading tasks array for the view
  foreach($searchResults as $itemFromDb) {
    $tasks[] = new Task($itemFromDb->description, $itemFromDb->completed);
  }

  $userResult = AppConfiguration::get('databaseQueryBuilder')->searchQuery('users');
  // Loading names array for the view
  foreach($userResult as $userFromDb) {
    $names[] = new User($userFromDb->name);
  }

} else {
  echo softDebugDumper($thisDatabaseConnected['database']);
}

require 'views/index.view.php';

?>