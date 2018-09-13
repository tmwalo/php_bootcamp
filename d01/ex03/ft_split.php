<?php

	function ft_split($str)
	{
		$strsplit = preg_split("/ +/", trim($str));
		sort($strsplit);
		return ($strsplit);
	}

?>
