#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$str = preg_replace("/[ \t]+/", ' ', trim($argv[1]));
		echo "$str\n";
	}
?>
