class Solution
{

    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones)
    {
        $count = 0;
        foreach (str_split($jewels) as $val) {
            $count += substr_count($stones, $val);
        }
        return $count;
    }
}