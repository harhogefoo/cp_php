<?php
  $N = trim(fgets(STDIN));
  list($S) = explode(" ", trim(fgets(STDIN)));

  $count = 0;
  for($i = 1; $i <= $N; $i++) {
    if (strcmp($S[$i - 1], "U") != 0) {
      continue;
    }

    for($j = $i + 1; $j <= $N; $j++) {
      if (strcmp($S[$j - 1], "M") != 0) {
        continue;
      }
      $k = $j * 2 - $i;
      if ($N < $k) {
        continue;
      }
      if (strcmp($S[$k - 1], "G") != 0) {
        continue;
      }
      $count++;
    }
  }
  printf("$count");