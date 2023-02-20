class Solution {

    /**
     * @param String[] $sentences
     * @return Integer
     */
    function mostWordsFound($sentences) {
        $maxCount = 0;
        foreach($sentences as $words){
            $count = count(explode(" ",$words));
            if($maxCount < $count){
                $maxCount = $count;
            }
        }
        return $maxCount;
    }
}