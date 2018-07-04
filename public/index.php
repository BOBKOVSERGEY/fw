<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet excepturi hic iste nobis placeat, voluptatem? Commodi, deserunt dolorem doloribus, eius eum eveniet harum iste laboriosam laudantium, molestiae nam nulla!
</body>
</html>
<?php

$query = rtrim($_SERVER['QUERY_STRING'], '/');

define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');


//require __DIR__ . '/../vendor/core/Router.php';
require __DIR__ . '/../vendor/libs/functions.php';
//require __DIR__ . '/../app/controllers/Main.php';
//require __DIR__ . '/../app/controllers/Posts.php';
//require __DIR__ . '/../app/controllers/PostsNew.php';

spl_autoload_register(function($class) {
  debug($class);
  $file = APP . "/controllers/$class.php";
  if (is_file($file)) {
    require_once $file;
  }
});

Router::add('^pages/?(?P<action>[a-z-]+)?$', ['controller' => 'Posts']);

// default routs
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

debug(Router::getRoutes());

Router::dispatch($query);


