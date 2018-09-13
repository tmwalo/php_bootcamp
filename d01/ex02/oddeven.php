#!/usr/bin/php
<?php
	$stdin = fopen("php://stdin", "r");
	$exit = false;
	while ($exit === false)
	{
		echo "Enter a number: ";
		if ($read = fgets($stdin))
		{
			$line = trim($read);
			if (is_numeric($line))
			{
				if (($line % 2) === 0)
					echo "The number $line is even\n";
				else
					echo "The number $line is odd\n";
			}
			else
				echo "'" . $line . "' is not a number\n";
		}
		else
		{
			$exit = true;
			echo "\n";
		}
	}
?>
