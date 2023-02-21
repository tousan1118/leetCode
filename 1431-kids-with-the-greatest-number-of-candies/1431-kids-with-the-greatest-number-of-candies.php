class Solution {

    /**
     * @param int[] $candies
     * @param int $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $max = max($candies);
        $result = [];
        for($i = 0; $i < count($candies);$i++){
            $candie = $candies[$i];
            if( $max <= $candie + $extraCandies ){
                $result[] = true;
                continue;
            }
            $result[] = false;
        }
        return $result;
    }
}