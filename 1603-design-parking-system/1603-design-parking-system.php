/*
 * @lc app=leetcode id=1603 lang=php
 *
 * [1603] Design Parking System
 */

// @lc code=start
class ParkingSystem
{

    private $parkingArea = [];

    /**
     * @param Integer $big
     * @param Integer $medium
     * @param Integer $small
     */
    function __construct($big, $medium, $small)
    {
        $this->parkingArea[] = $big;
        $this->parkingArea[] = $medium;
        $this->parkingArea[] = $small;
    }

    /**
     * @param Integer $carType
     * @return Boolean
     */
    function addCar($carType)
    {
        if ($this->parkingArea[(int)$carType - 1] > 0) {
            $this->parkingArea[(int)$carType - 1]--;
            return true;
        }
        return false;
    }
}

/**
 * Your ParkingSystem object will be instantiated and called as such:
 * $obj = ParkingSystem($big, $medium, $small);
 * $ret_1 = $obj->addCar($carType);
 */
// @lc code=end