<?php

$myfile = fopen("numbers/divisionhelp.txt", "w") or die ("unable to open file");


    for($i=81;$i>0;$i--) {
        for ($j = 1; $j <= 9; $j++) {
            if (($i % $j) == 0 && $i / $j < 10) {
                fwrite($myfile, "$i/$j");

                fwrite($myfile, " = ");
                fwrite($myfile, "  HELP:" . $i . " = ");
                for ($k = 1; $k <= $i / $j; $k++) {

                    if ($k != $i / $j) {
                        fwrite($myfile,  "$j + ");

                    }
                }
                fwrite($myfile,  "$j ");

                fwrite($myfile, "|");
                fwrite($myfile, $i / $j);
                fwrite($myfile, "\n");
            }
        }
    }

?>