<?php

function fib($i)
{
  if ($i == 0)
  {
    return 0;
  }

  if ($i == 1)
  {
    return 1;
  }

  return fib($i-1) + fib($i-2);
}

$start = microtime(true);
echo fib(32);
$time = microtime(true) - $start;
echo "\n{$time}s";
echo "\n";
