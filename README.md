# Turn-based strategy algorithm

You are developing a game where you want to check if a player standing in a certain position (X,Y) on the map is capable of moving to the desired location. The map is a 2D array made of tiles - tile marked as TRUE means LAND free to move, tile marked as FALSE means WALL - forbidden to move.

Here are the rules:
- Player can move one cell to the left
- Player can move one cell to the top
- Player can move one cell to the bottom
- Player can move one or two cells to the right
- Player can't move to the cell, where is the wall (marked as false in the matrix)
- Player can't move out of map / matrix


|  |  |  |  |  |
|---|---|---|---|---|
| X | X | O | X | X |
| X | O | P | O | O |
| X | X | O | X | X |

```
<?php

function moveAllowed(array $matrix, int $fromRow, int $fromColumn, int $toRow, int $toColumn) : bool
{
  return false;
}

$matrix = [
    [false, true,  true,  false, false, false],
    [true,  true,  true,  false, false, false],
    [true,  true,  true,  true,  true,  true],
    [false, true,  true,  false, true,  true],
    [false, true,  true,  true,  false, true],
    [false, false, false, false, false, false],
  ];
  

echo moveAllowed($matrix, 3, 2, 2, 2) ? "true\n" : "false\n"; // true, Valid move
echo moveAllowed($matrix, 3, 2, 1, 1) ? "true\n" : "false\n"; // false, Invalid move
echo moveAllowed($matrix, 3, 2, 3, 4) ? "true\n" : "false\n"; // false, Can't travel through land
echo moveAllowed($matrix, 3, 2, 6, 2) ? "true\n" : "false\n"; // false, Out of bounds
echo moveAllowed($matrix, 3, 2, 1, 1) ? "true\n" : "false\n"; // false, Invalid move
```
