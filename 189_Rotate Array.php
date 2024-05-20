


/* *****************************
189. Rotate Array

Given an integer array nums, rotate the array to the right by k steps, where k is non-negative.

 

Example 1:

Input: nums = [1,2,3,4,5,6,7], k = 3
Output: [5,6,7,1,2,3,4]
Explanation:
rotate 1 steps to the right: [7,1,2,3,4,5,6]
rotate 2 steps to the right: [6,7,1,2,3,4,5]
rotate 3 steps to the right: [5,6,7,1,2,3,4]
Example 2:

Input: nums = [-1,-100,3,99], k = 2
Output: [3,99,-1,-100]
Explanation: 
rotate 1 steps to the right: [99,-1,-100,3]
rotate 2 steps to the right: [3,99,-1,-100]
 

Constraints:

1 <= nums.length <= 105
-231 <= nums[i] <= 231 - 1
0 <= k <= 105
 
 
********************************* */


//Answer :

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $arrCnt   = count($nums);
        
        //若$k大於nums則會超過長度重複位移 因此計算餘數來知道實際只要換幾次
        $k = $k % $arrCnt;
    
        $arrPartA = array_slice($nums, 0, $arrCnt-$k );
        $arrPartB = array_slice($nums, $arrCnt-$k, $k);
        $nums = array_merge($arrPartB,$arrPartA);
    
    
        /* 
        //因為 array_unshift 會重新排序消耗太大的效能因此用其他方法
        $arrCnt = count($nums);
        $kk = $k ;
        while($kk>0){
            $getFinal = $nums[$arrCnt -1];
            // 將該值插入到陣列的第一位
            array_unshift($nums, $getFinal);
            $kk--;
        }
        $nums = array_slice($nums, 0, $arrCnt);
        */
    }
}