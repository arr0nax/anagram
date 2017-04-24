# Anagram
## a site that analyzes possible anagrams
made to practice php testing 

## Application Spex
* _app will identify matching words_
  * **Input:** bread, bread
  * **Expected Output:** true
* _app will identify matching words regardless of letter order_
    * **Input:** bread braed
    * **Expected Output:** true
* _app will identify non-matching words_
  * **Input:** bread foot
  * **Expected Output:** false
* _app will identify matching words from a list and return the matches only_
  * **Input:** bread: braed foot
  * **Expected Output:** braed
