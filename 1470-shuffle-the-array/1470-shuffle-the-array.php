class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n)
    {
        $number = (int)$n;
        $result = [];
        for ($i = 0; $i < count($nums) / 2; $i++) {
            $abstractIndexNumber = $i + 1;
            $result[] = $nums[$i];
            $result[] = $nums[$i + $number];
        }
        return $result;
    }
}