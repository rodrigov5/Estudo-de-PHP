<?php

$notasBimestre1 = [
  'pedro' => 8.5,
  'maria' => 9.0,
  'jose' => null,
  'paulo' => 5.5,
  'marta' => 10.0,
];

$notasBimestre2 = [
  'pedro' => 8.5,
  'maria' => 9.5,
  'jose' => 6.0,
  'paulo' => 5.0,
  'marta' => 10.0,
];

var_dump(array_diff_key($notasBimestre1, $notasBimestre2));