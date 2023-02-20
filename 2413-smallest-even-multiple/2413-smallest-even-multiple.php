class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function smallestEvenMultiple($n) {
        if($n % 2 == 0){
            return $n;
        }
        return $n * 2;
    }
}