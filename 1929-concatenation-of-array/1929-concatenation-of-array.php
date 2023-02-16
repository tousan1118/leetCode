class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums)
    {
        $ans = $nums;
        return array_merge($ans, $nums);
    }
}