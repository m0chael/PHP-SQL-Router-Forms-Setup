<?php

class Router {
  // Routes for GET and POST are stored here and passed in from the routes.php file upon initilization
  protected $routes = [
    'GET' => [],
    'POST' => []
  ];

  // Defining the store with get and post routes
  public function define($getRoutes, $postRoutes) {
    $this->routes['GET'] = $getRoutes;
    $this->routes['POST'] = $postRoutes;
  }

  // Directs when key exists and returns the appropriate controller
  public function direct($url, $requestType) {
    if (array_key_exists($url, $this->routes[$requestType])) {
      return $this->routes[$requestType][$url];
    } else {
      return $this->routes['GET']['404'];
    }
  }
}

?>