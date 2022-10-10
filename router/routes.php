<?php

// Defined GET routes of the app
$getRoutes = [
  '' => 'controllers/index-controller.php',
  'about' => 'controllers/about-controller.php',
  'about/culture' => 'controllers/about-culture-controller.php',
  'contact' => 'controllers/contact-controller.php',
  '404' => 'controllers/404-controller.php'
];

// Defined POST routes of the app
$postRoutes = [
  'names' => 'controllers/add-name.php',
];

?>