class Solution
{

    /**
     * @param int[][] $grid
     * @return int
     */
    function maxIncreaseKeepingSkyline($grid)
    {
        $row = [];
        $col = [];
        for ($i = 0; $i < count($grid); $i++) {
            $row[$i] = $grid[$i][0];
            $col[$i] = $grid[0][$i];
            for ($j = 0; $j < count($grid); $j++) {
                $row[$i] = max($row[$i], $grid[$i][$j]);
                $col[$i] = max($col[$i], $grid[$j][$i]);
            }
        }

        $sum = 0;
        for ($i = 0; $i < count($grid); $i++) {
            for ($j = 0; $j < count($grid); $j++) {
                $sum += (min($row[$i], $col[$j]) - $grid[$i][$j]);
            }
        }
        return $sum;
    }
}