<?php

class RouterRequest {

  // Parses URL with trim and removing trailing and leading slashes /, returns the current URL
  public function url() {
    return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
  }

  // Returns the request method from the server
  public function requestMethod() {
    return $_SERVER['REQUEST_METHOD'];
  }
}

?>