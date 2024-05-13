/**
 * @return boolean The destination is reachable or not
 */
function canTravelTo(array $gameMatrix, int $fromRow, int $fromColumn, int $toRow, int $toColumn): bool {
  $rows = count($gameMatrix);
  $columns = count($gameMatrix[0]);

  // out of the bounds
  if ($toRow > ($rows - 1) || $toColumn > ($columns - 1) || $toRow < 0 || $toColumn < 0) {
    return false;
  }

  // hitting the wall
  if (!$gameMatrix[$toRow][$toColumn]) {
    return false;
  }

  // move is possible
  foreach (availableMoves($fromRow, $fromColumn) as $move) {
    if ($move[0] == $toRow && $move[1] == $toColumn) {
      return true;
    }
  }

  return false;
}

function availableMoves($row, $column): array
{
  $moves = [];

  $moves[] = [$row - 1, $column];
  $moves[] = [$row, $column - 1];
  $moves[] = [$row, $column + 1];
  $moves[] = [$row, $column + 2];
  $moves[] = [$row + 1, $column];

  return $moves;
}

$gameMatrix = [
  [false, true,  true,  false, false, false],
  [true,  true,  true,  false, false, false],
  [true,  true,  true,  true,  true,  true],
  [false, true,  true,  false, true,  true],
  [false, true,  true,  true,  false, true],
  [false, false, false, false, false, false],
];


echo canTravelTo($gameMatrix, 3, 2, 2, 2) ? "true\n" : "false\n"; // true, Valid move
echo canTravelTo($gameMatrix, 3, 2, 3, 4) ? "true\n" : "false\n"; // false, Can't travel through wall
echo canTravelTo($gameMatrix, 3, 2, 6, 2) ? "true\n" : "false\n"; // false, Out of bounds
echo canTravelTo($gameMatrix, 3, 2, 2, 1) ? "true\n" : "false\n"; // false, Invalid move
