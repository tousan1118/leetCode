class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
        $ans = $nums;
        for($i=0;$i< count($nums);$i++)
        {
            $nums[$i] = $ans[$ans[$i]];
        }
        return $nums;
    }
}