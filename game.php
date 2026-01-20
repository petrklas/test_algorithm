<?php

function moveAllowed(array $map, int $fromRow, int $fromColumn, int $toRow, int $toColumn) : bool
{
  return false;
}

$map = [
    [false, true,  true,  false, false, false],
    [true,  true,  true,  false, false, false],
    [true,  true,  true,  true,  true,  true],
    [false, true,  true,  false, true,  true],
    [false, true,  true,  true,  false, true],
    [false, false, false, false, false, false],
  ];
  

echo moveAllowed($map, 3, 2, 2, 2) ? "true\n" : "false\n"; // true, Valid move
echo moveAllowed($map, 3, 2, 2, 1) ? "true\n" : "false\n"; // false, Invalid move
echo moveAllowed($map, 3, 2, 1, 1) ? "true\n" : "false\n"; // false, Invalid move
echo moveAllowed($map, 3, 2, 3, 4) ? "true\n" : "false\n"; // true, Valid move
echo moveAllowed($map, 3, 2, 3, 3) ? "true\n" : "false\n"; // false, Can't travel through wall
echo moveAllowed($map, 3, 2, 6, 2) ? "true\n" : "false\n"; // false, Out of bounds
