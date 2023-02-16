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
    private $sum = 0;
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function sumEvenGrandparent($root)
    {
        $this->dfsTreeNode($root, null, null);
        return $this->sum;
    }

    function dfsTreeNode($root, $parent, $grandParent)
    {
        if (empty($root)) {
            return null;
        }
        if (!empty($grandParent) && $grandParent->val % 2 === 0) {
            $this->sum += $root->val;
        }
        $this->dfsTreeNode($root->left, $root, $parent);
        $this->dfsTreeNode($root->right, $root, $parent);
    }
}