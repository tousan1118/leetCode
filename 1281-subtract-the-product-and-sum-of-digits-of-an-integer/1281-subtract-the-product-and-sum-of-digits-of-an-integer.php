class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function subtractProductAndSum($n) {
        
        $product = 1;
        $sum = 0;
        $s = str_split(strval($n));
        foreach($s as $val){
            $product *= $val;
            $sum += $val;
        }
        return $product - $sum;
    }
}