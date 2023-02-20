class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $max = 0;
        foreach($accounts as $customer => $bank){
            $sum = array_sum($bank);
            if( $max < $sum ){
                $max = $sum;
            }
        }
        return $max;
    }
}