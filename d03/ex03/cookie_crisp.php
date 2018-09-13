<?php
  if ($_GET['action'] === 'set')
  {
	if ($_GET['name'] && $_GET['value'])
    	setcookie($_GET['name'], $_GET['value'], time() + 3600);
  }
  else if ($_GET['action'] === 'get')
  {
	$name = $_GET['name'];
	if ($name && $_COOKIE[$name])
    	echo "{$_COOKIE[$name]}\n";
  }
  else if ($_GET['action'] === 'del')
  {
	$name = $_GET['name'];
	if ($name)
    	setcookie($name);
  }
?>
