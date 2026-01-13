<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$counter = 0;
$total = 0;
foreach($numbers as $numeri) {
    if($numeri % 2 == 0) {
        $total += $numeri;
        $counter++;
    }
}
echo $total / $counter;