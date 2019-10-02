<?php
echo "was is t getal boi\n";
$Numbruv = readline();
if (is_numeric($Numbruv)) {
    $totaal = 1;
    for ($i = 1; $i <= $Numbruv; $i++) {
        $totaal = $i * $totaal;
    }
    echo $totaal;
}
else {
    echo "AH HELL NAH", exit();
}