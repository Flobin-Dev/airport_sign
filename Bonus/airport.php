<?php

function text_display_color($str, $len)
{
	$totallen = strlen($str);
	for ($i = 0; $i < $totallen + 1; $i++)
	{
		if ($i == $totallen)
		{
			$i = 0;
			usleep(200000);
		}
		else
		{
			@system('clear');
			echo substr($str . $str, $i, $len);
			usleep(200000);
		}
	}
	shell_exec("tput sgr0");
}

text_display_color("C'est vous qui êtes enfermé ici avec moi !", 50);

?>