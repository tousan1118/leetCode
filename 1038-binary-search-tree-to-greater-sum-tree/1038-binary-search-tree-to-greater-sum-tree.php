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
    private $_sum = 0;
    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function bstToGst($root)
    {
        if (!empty($root->right)) {
            $this->bstToGst($root->right);
        }
        $this->_sum = $root->val = $root->val + $this->_sum;
        if (!empty($root->left)) {
            $this->bstToGst($root->left);
        }
        return $root;
    }
}