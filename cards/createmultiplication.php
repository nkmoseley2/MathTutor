<?php
$myfile = fopen("numbers/multiplication.txt", "w") or die ("unable to open file");

for($i=0;$i<=9;$i++)
{
	fwrite($myfile,"0/$i");
	fwrite($myfile," = ");
	fwrite($myfile, "0\n");
	
}
for($i=0;$i<=9;$i++)
{
	fwrite($myfile,"$i/0");
	fwrite($myfile," = ");
	fwrite($myfile, "infinite\n");

}
for($i=1; $i<10;$i++)
{
	for($j=0;$j<10;$j++)
	{
		fwrite($myfile,$i."*".$j);
		fwrite($myfile," | ");
		fwrite($myfile,$i*$j);
		if($i*$j<81) {
			fwrite($myfile, "\n");

		}
	}
}


?>
