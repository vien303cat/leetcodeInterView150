


/* *****************************
383. Ransom Note

Given two strings ransomNote and magazine, return true if ransomNote can be constructed by using the letters from magazine and false otherwise.

Each letter in magazine can only be used once in ransomNote.

 

Example 1:

Input: ransomNote = "a", magazine = "b"
Output: false
Example 2:

Input: ransomNote = "aa", magazine = "ab"
Output: false
Example 3:

Input: ransomNote = "aa", magazine = "aab"
Output: true
 

Constraints:

1 <= ransomNote.length, magazine.length <= 105
ransomNote and magazine consist of lowercase English letters.
 
 
********************************* */


//Answer :

class Solution
{

  /**
   * @param String $ransomNote * @param String $magazine
   * @return Boolean
   */
    public function canConstruct($ransomNote, $magazine)
    {
        $Ans = true;
        $outArr = array_count_values(str_split($magazine));
        $inArr = array_count_values(str_split($ransomNote));
        foreach($inArr as $key => $val){
            if($outArr[$key] < $val){
                $Ans = false; 
                break;
            }
        }
        return $Ans;



    }
}