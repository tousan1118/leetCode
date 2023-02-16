/*
 * @lc app=leetcode id=2265 lang=php
 *
 * [2265] Count Nodes Equal to Average of Subtree
 */

// @lc code=start
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution
{

    private $count = 0;
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function averageOfSubtree($root)
    {
        $this->dfsNodes($root);
        return $this->count;
    }

    function dfsNodes($root)
    {
        if (empty($root)) {
            return [0, 0];
        }
        $left = $this->dfsNodes($root->left);
        $right = $this->dfsNodes($root->right);

        $sum = $left[0] + $right[0] + $root->val;
        $count = $left[1] + $right[1] + 1;

        if (floor($sum / $count) == $root->val) {
            $this->count++;
        }
        return [$sum, $count];
    }
}
// @lc code=end