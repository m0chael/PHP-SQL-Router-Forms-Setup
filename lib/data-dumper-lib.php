<?php

// Helper debug functions
function softDebugDumper($incoming) {
  echo '<pre>';
  var_dump($incoming);
  echo '</pre>';
};

function debugDumper($incoming) {
  echo '<pre>';
  die(var_dump($incoming));
  echo '</pre>';
};

?>