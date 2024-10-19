<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if ($uri === '/') {
  require './controllers/index.php';
} else if ($uri == '/about') {
  require './controllers/about.php';
} else if ($uri == '/contact') {
  require './controllers/contact.php';
}

$routes = [
  '/' => './controllers/index.php',
  '/about' => './controllers/about.php',
  '/notes' => './controllers/notes.php',
  '/note' => './controllers/note.php',
  '/contact' => './controllers/contact.php',
];

function routeToContoller($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
  } else {
    abort();
  }
}

function abort()
{
  http_response_code((404));
  echo '404';
  die();
}

routeToContoller($uri, $routes);