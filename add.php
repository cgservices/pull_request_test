<?php

$start = microtime(true);
$sum = 0;
$i = 0;
while ($i < 1000000) {
  $sum += $i;
  $i += 1;
}

echo $sum;
echo "\n";
$time = microtime(true) - $start;
echo "\n{$time}s";
echo "\n";
