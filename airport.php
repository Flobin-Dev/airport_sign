<?php

function text_display($str)
{
	$maxletters = strlen($str);
	for($i=0; $i < $maxletters + 1; $i++)
	{
		if ($i == $maxletters)
		{
			$i = 0;
			usleep(500000);
		}
		else
		{
			@system('clear');
			echo substr($str . $str, $i, 30);
			usleep(500000);
		}
	}
}

?>