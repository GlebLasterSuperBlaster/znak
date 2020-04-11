<?php

require_once('config.php');

function getRequestPath() {
  $result = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  return '/' . ltrim(str_replace('index.php', '', $result), '/');
}

function detectOS($list) {
  preg_match("/" . join('|', $list) . "/", $_SERVER['HTTP_USER_AGENT'], $result);
  return current($result);
}

function redirectToURL($url) {
  header('Location: ' . $url, true, 302);
  exit();
}

function showTemplate($template, $routes = array(), $redirects = array()) {
  $templatesDir = __DIR__ . '/templates';
  $file = $templatesDir . '/' . rtrim($template, '.php') . '.php';
  if (file_exists($file)) {
    require_once($file);
  }
  else {
    redirectToURL('404');
  }  
}

function main($routes, $redirects) {
  $path = getRequestPath();
  $found = array_key_exists($path, $routes);
  if ((!$found) && (strlen($path) > 1)) {
    $path = rtrim($path, '/');
    $found = array_key_exists($path, $routes);
  }
  if ($found) {
    $template = $routes[$path]['template'];
    if ('' == $template) {
      $os = detectOS(array_keys($redirects));
      if (array_key_exists($os, $redirects)) {
        redirectToURL($redirects[$os]);
      }
	  else {
	    redirectToURL('/');
	  }    
    }
    else {
	  showTemplate($template, $routes, $redirects);
    }
  }
  else {
    showTemplate('404', $routes, $redirects);
  }
}

main($routes, $redirects);

?>
