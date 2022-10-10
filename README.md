# PHP-SQL-Router-Forms-Setup

A PHP app setup which interfaces with mySQL, contains views, controllers, and abstracted store for configuration. There is also a simple router written from scratch for GET and POST requests.

## Requires

A config file in the format of the following in the root directory:

```
<?php
// Configuration File
return [
  'database' => [
    'name' => '',
    'username' => '',
    'password' => '',
    'connection' => '',
    'options' => []
  ]
];
?>
```