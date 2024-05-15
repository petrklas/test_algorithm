# Turn-based strategy algorithm

You are developing a game where you want to check if a player standing in a certain position (X,Y) on the map is capable of moving to the desired location. The map is a 2D array made of tiles - tile marked as TRUE means LAND free to move, tile marked as FALSE means WALL - forbidden to move. At the same time, player can always move only 1 tile to the left, right, bottom and 1 or 2 tiles to the right. Diagonal moves are not allowed.

## Allowed moves

|  |  |  |  |  |
|---|---|---|---|---|
| Not Allowed | Not Allowed | Allowed | Not Allowed | Not Allowed |
| Not Allowed | Allowed | Player | Allowed | Allowed |
| Not Allowed | Not Allowed | Allowed | Not Allowed | Not Allowed |

## Final rules

Combining conditions for allowed moves and possibility to move only on LAND giving these rules:

- Player can move one cell to the left
- Player can move one cell to the top
- Player can move one cell to the bottom
- Player can move one or two cells to the right
- Player can't move to the cell, where is the wall (marked as false in the matrix)
- Player can't move out of map

## Requirements
Finish the function moveAllowed, that accepts these params: map, current position of player (row and column) and desired destination (row and column). This function should return TRUE in case that move is allowed and FALSE if not possible.

```php
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
echo moveAllowed($map, 3, 2, 1, 1) ? "true\n" : "false\n"; // false, Invalid move
echo moveAllowed($map, 3, 2, 3, 3) ? "true\n" : "false\n"; // false, Can't travel through wall
echo moveAllowed($map, 3, 2, 6, 2) ? "true\n" : "false\n"; // false, Out of bounds
```
