class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums)
    {
        $result = [];
        for ($i = 0; $i < count($nums); $i++) {
            $add = 0 < $i ? (int)$result[$i - 1] : 0;
            $result[] = (int)$nums[$i] + $add;
        }
        return $result;
    }
}