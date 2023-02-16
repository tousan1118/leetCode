class Solution
{

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address)
    {
        return preg_replace('/\./', '[.]', $address);
    }
}