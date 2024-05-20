


/* *****************************
169. Majority Element

The majority element is the element that appears more than ⌊n / 2⌋ times. You may assume that the majority element always exists in the array.


Example 1:

Input: nums = [3,2,3]
Output: 3
Example 2:

Input: nums = [2,2,1,1,1,2,2]
Output: 2
 

Constraints:

n == nums.length
1 <= n <= 5 * 104
-109 <= nums[i] <= 109
 
 
********************************* */


//Answer :

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $arrCnt = count($nums);
        $cntArr = [];
        for($i=0 ; $i<$arrCnt ; $i++){
            $nowVal = $nums[$i] ; 
            $cntArr[$nowVal] += 1 ;
            if($cntArr[$nowVal] >= ($arrCnt/2) ){
                $getMax = $nowVal;
                break;
            }
        }
        return isset($getMax)?$getMax:false ;
    
    
        /* ***
        //php函式解
        
        $array=array_count_values($nums);
        arsort($array);
        return array_key_first($array);
    
        *** */
    
    }
}