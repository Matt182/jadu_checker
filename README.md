# jadu_checker

This project is based on the Symfony command console. The following usage instructions show the commands, parameters, and the expected outputs.

PLEASE NOTE: If you wish to use strings with spaces as a parameter, use ' '. Eg: 'this is a string'

To install, simply clone the git repo [https://github.com/Matt182/jadu_checker], navigate to your installation root (eg: D:\xampp\htdocs\jadu_checker), run composer install to install all dependencies, then follow the usage below.

isPalindrome:
Usage: php bin/console is-palindrome <word>
Output:

php bin/console is-palindrome anna
anna is a palindrome

php bin/console is-palindrome Bark
Bark is not a palindrome

isAnagram:
Usage: php bin/console is-anagram <word> <comparison>
Output:

php bin/console is-anagram coalface 'cacao elf'
cacao elf is an anagram of coalface

php bin/console is-anagram coalface 'dark elf' 
dark elf is not an anagram of coalface

isPangram:
Usage: php bin/console is-pangram <phrase>
Output:

php bin/console is-pangram 'The quick brown fox jumps over the lazy dog'
'The quick brown fox jumps over the lazy dog' is a pangram

php bin/console is-pangram 'The British Broadcasting Corporation (BBC) is a British public service broadcaster.'
'The British Broadcasting Corporation (BBC) is a British public service broadcaster.' is not a pangram