<?php

function text_display_color($str, $len)
{
	$totallen = strlen($str);
	for ($i = 0; $i < $totallen + 1; $i++)
	{
		if ($i == $totallen)
		{
			$i = 0;
			usleep(500000);
		}
		else
		{
			@system('clear');
			echo substr($str . $str, $i, $len);
			usleep(500000);
		}
	}
	shell_exec("tput sgr0");
}

text_display_color("Je ne fais que mettre en exergue le paradoxe qui est de demander à un homme masqué qui il est.", 35);

?>