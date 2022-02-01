<?php declare(strict_types=1);

namespace App;

/**
 * Pangrams, anagrams and palindromes
 * 
 * Implement each of the functions of the Checker class. 
 * Aim to spend about 10 minutes on each function. 
 */
class Checker
{
    /**
     * A palindrome is a word, phrase, number, or other sequence of characters 
     * which reads the same backward or forward.
     *
     * @param string $word
     * @return bool
     */
    public function isPalindrome(string $word) : bool
    {
        //Remove all spaces, change case to lowercase & reverse
        $string = str_replace(' ', '', $word);
        $string = strtolower($string);
        $reversed = strrev($string);

        //Check if palindrome
        if($word == $reversed){
            return true;
        }else{
            return false;
        }
    }
    
    /**
     * An anagram is the result of rearranging the letters of a word or phrase 
     * to produce a new word or phrase, using all the original letters 
     * exactly once.
     * 
     * @param string $word
     * @param string $comparison
     * @return bool
     */
    public function isAnagram(string $word, string $comparison) : bool
    {
        //Convert both to lowercase and remove spaces
        $word = str_replace(' ', '', $word);
        $word = strtolower($word);
        $comparison = str_replace(' ', '', $comparison);
        $comparison = strtolower($comparison);

        if(count_chars($word, 1) == count_chars($comparison, 1)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * A Pangram for a given alphabet is a sentence using every letter of the 
     * alphabet at least once. 
     * 
     * @param string $phrase
     * @return bool
     */    
    public function isPangram(string $phrase)// : bool
    {
        //Convert input to lowercase and remove spaces
        $phrase = strtolower($phrase);
        $phrase = str_replace(' ', '', $phrase);

        //Create array of all letters
        $alphabet = range('a', 'z');

        //Split lowercase input into array
        $sentence = str_split($phrase);

        //Check if there any any characters not present between the two arrays
        //array_diff checks for differences
        //if all letters in the alphabet have been used at least once, array_diff will be empty
        if(empty(array_diff($alphabet, $sentence))){
            return true;
        }else{
            return false;
        }
    }
}