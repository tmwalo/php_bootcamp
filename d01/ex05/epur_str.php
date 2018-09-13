#!/usr/bin/php
<?php
	if ($argc === 2)
	{
		$strsplit = preg_split("/ +/", trim($argv[1]));
		$strjoin = implode(" ", $strsplit);
		echo "$strjoin\n";
	}
?>
