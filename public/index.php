<?php

$query = $_SERVER['QUERY_STRING'];

require __DIR__ . '/../vendor/core/Router.php';
require __DIR__ . '/../vendor/libs/functions.php';

Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);

debug(Router::getRoutes());

if (Router::matchRoute($query)) {
  debug(Router::getRoutes());
} else {
  echo '404';
};

