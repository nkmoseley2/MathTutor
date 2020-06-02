<?php
$myfile = fopen("numbers/multiplicationhelp.txt", "w") or die ("unable to open file");


for($i=1; $i<10;$i++)
{
	for($j=0;$j<10;$j++)
	{
		fwrite($myfile,$i."*".$j);
		if($j!=0) {
			fwrite($myfile, "  HELP:" . $i * $j . " = ");

			for ($m = 1; $m < $j; $m++) {

				if ($m != $j) {
					fwrite($myfile, "$i + ");

				}

			}

			fwrite($myfile, "$i ");
		}
		fwrite($myfile," | ");
		fwrite($myfile,$i*$j);
		if($i*$j<81) {
			fwrite($myfile, "\n");

		}
	}
}


?>
