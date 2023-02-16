class Solution
{

    /**
     * @param Integer[][] $score
     * @param Integer $k
     * @return Integer[][]
     */
    function sortTheStudents($score, $k)
    {
        $fixScore = [];
        $sort = [];
        for ($i = 0; $i < count($score); $i++) {
            array_push($sort, $score[$i][$k]);
        }
        arsort($sort, SORT_NUMERIC);
        foreach ($sort as $key => $val) {
            array_push($fixScore, $score[$key]);
        }
        return $fixScore;
    }
}