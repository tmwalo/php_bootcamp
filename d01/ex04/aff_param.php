#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$argc = $argc - 1;
		$index = 1;
		while ($argc > 0)
		{
			echo "{$argv[$index]}\n";
			$index = $index + 1;
			$argc = $argc - 1;
		}
	}
?>
