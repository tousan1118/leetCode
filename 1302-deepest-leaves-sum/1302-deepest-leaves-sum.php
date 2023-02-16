/**
 * Definition for a binary tree node.
 * class TreeNode {
 * public $val = null;
 * public $left = null;
 * public $right = null;
 * function __construct($val = 0, $left = null, $right = null) {
 * $this->val = $val;
 * $this->left = $left;
 * $this->right = $right;
 * }
 * }
 */
class Solution
{
    private $maxLevel = 0;
    private $sum = 0;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function deepestLeavesSum($root)
    {
        if (empty($root)) {
            return $this->sum;
        }
        $this->calculateTreeNode($root, 0);
        return $this->sum;
    }


    /**
     * 
     *
     * @param TreeNode $root
     * @param int $level
     * @return void
     */
    private function calculateTreeNode($root, $level)
    {
        if (empty($root)) {
            return;
        }
        if ($level > $this->maxLevel) {
            $this->sum = 0;
            $this->maxLevel = $level;
        }
        if ($level == $this->maxLevel) {
            $this->sum = $this->sum + $root->val;
        }
        $this->calculateTreeNode($root->left, $level + 1);
        $this->calculateTreeNode($root->right, $level + 1);
    }
}