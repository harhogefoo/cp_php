<?php
  list($vegCount, $meatCount, $reg, $max) = explode(" ", trim(fgets(STDIN)));

  $maxVegCount = $vegCount;
  if ($max < $vegCount) {
    $maxVegCount = $max;
  }

  $ateVegCount = 0;
  for ($currentVegCount = $maxVegCount; $currentVegCount >= 0; $currentVegCount--) {
    $currentMeatCount = $currentVegCount * $reg;
    if ($currentMeatCount <= $meatCount && $currentMeatCount + $currentVegCount <= $max) {
      $ateVegCount = $currentVegCount;
      break;
    }
  }

  printf("$ateVegCount");