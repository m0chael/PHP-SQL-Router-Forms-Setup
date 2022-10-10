<?php

// Dependency injector which is an AppConfiguration, storing the configuration of the app as a key value static store
class AppConfiguration {
  protected static $registry;

  public static function bind($key, $value) {
    static::$registry[$key] = $value;
  }

  public static function get($key) {
    if (array_key_exists($key, static::$registry)) {
      return static::$registry[$key];
    } else {
      throw new Exception('No key is bound in the registry');
    }
  }
}

?>