<?php
$myfile = fopen("numbers/addition.txt", "w") or die ("unable to open file");

for($i=0; $i<10;$i++)
{
	for($j=0;$j<10;$j++)
	{
		fwrite($myfile,$i."+".$j);
		fwrite($myfile," | ");
		fwrite($myfile,$i+$j);
		if($i+$j<20) {
			fwrite($myfile, "\n");
		}

	}
}


?>
