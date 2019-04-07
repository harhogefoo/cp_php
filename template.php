<?php
  //一行分を読み込む, 空白で分割してそれぞれ$aと$bの変数に入れる
  list($a, $b) = explode(" ", trim(fgets(STDIN)));

  $c = $a + $b;
  //2行目を読み込む
  $S = trim(fgets(STDIN));
  //標準出力に書き出す。
  printf("$c $S\n");