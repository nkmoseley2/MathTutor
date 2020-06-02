<?php

$myfile = fopen("numbers/division.txt", "w") or die ("unable to open file");

    for($i=1; $i<81;$i++)
    {
        fwrite($myfile,"0/$i");
        fwrite($myfile," = ");
        fwrite($myfile, "0");
        fwrite ($myfile, "\n");
    }
    for($i=0; $i<81;$i++)
    {
        fwrite($myfile,"$i/0");
        fwrite($myfile, " = infinite\n");

    }


    for($i=81;$i>0;$i--) {
        for ($j = 1; $j <= 9; $j++) {
            if (($i % $j) == 0 && $i/$j <10) {
                fwrite($myfile, "$i/$j");
                fwrite($myfile, " = ");
                fwrite($myfile,  $i / $j);
                fwrite($myfile, "\n");
            }
        }
    }
?>