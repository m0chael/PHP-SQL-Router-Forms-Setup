<?php
// Initial loader file for the app, uses "composer install" for autoloader and "composer dump-autoload" to regenerate
require 'vendor/autoload.php';

// AppConfiguration is an abstracted store for the app, contained in lib/dependency-injector.php
AppConfiguration::bind('config', require 'config.php');
AppConfiguration::bind('database', new ConnectorDB());
AppConfiguration::bind('databaseConnected', AppConfiguration::get('database')->makeConnection(AppConfiguration::get('config')['database']));
AppConfiguration::bind('databaseQueryBuilder', new QueryBuilder(AppConfiguration::get('databaseConnected')['database']));
AppConfiguration::bind('router', new Router());
AppConfiguration::bind('routerRequest', new RouterRequest());

// Routes and router setup for get and post
require 'router/routes.php';
AppConfiguration::get('router')->define($getRoutes, $postRoutes);

// Handles the directing of the app for the router
require AppConfiguration::get('router')->direct(AppConfiguration::get('routerRequest')->url(), AppConfiguration::get('routerRequest')->requestMethod());

?>