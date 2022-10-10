<?php

// Checks the resulting associate array to see if the status connected properly, otherwise softDebugDumper with the resulting error
if (AppConfiguration::get('databaseConnected')['status']){
  // Uses the dependency injector store and calls an insertQuery with the post name
  $insertNameResult = AppConfiguration::get('databaseQueryBuilder')->insertQuery('users', ['name'=>$_POST['name']]);
  header('Location: /');
} else {
  echo softDebugDumper($thisDatabaseConnected['database']);
}

?>