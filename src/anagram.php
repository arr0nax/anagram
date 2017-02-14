<?php
class Anagram
{
    public $keyword;

    function __construct($keyword) {
        $this->keyword = $keyword;
    }


    // function compare_words($input) {
    //     $result_array = array();
    //     $input_word_array = explode(' ', $input);
    //     $keyword_array = str_split($this->keyword);
    //     sort($keyword_array);
    //     for ($i=0;$i<count($input_word_array);$i++) {
    //         $input_array = str_split($input_word_array[$i]);
    //         sort($input_array);
    //         if ($keyword_array == $input_array) {
    //             array_push($result_array, $input_word_array[$i]);
    //         }
    //     }
    //     return implode(' ', $result_array);
    // }

    // function compare_words($input) {
    //     $input = explode(" ", $input);
    //     $anagram_array = array();
    //     $newKeyword = str_split(strtolower($this->keyword));
    //     sort($newKeyword);
    //     for ($i=0; $i < count($input); $i++) {
    //         $input_word = str_split(strtolower($input[$i]));
    //         sort($input_word);
    //         if ($input_word == $newKeyword) {
    //             array_push($anagram_array, $input[$i]);
    //         }
    //     }
    //     return implode(" ", $anagram_array);
    // }

    
    function compare_words($input) {
        $input_array = explode(" ", $input);
        $anagram_result = array();
        $partial_match = array();
        for ($i=0; $i < count($input_array) ; $i++) {
            $wordone = count_chars($input_array[$i], 0);
            $wordtwo = count_chars($this->keyword, 0);
            if ($wordone == $wordtwo) {
                array_push($anagram_result, $input_array[$i]);
            } else {
                for ($j=0; $j<count($wordone); $j++) {
                    if (in_array($wordone[$j], $wordtwo)) {
                        array_push($partial_match, $wordone[$j]);
                    }
                }
                if (count($partial_match) == count($wordone)) {
                    array_push($anagram_result, $input_array[$i]);
                }
                $partial_match = array();
            }
        }
        return implode(" ", $anagram_result);
    }



}
?>
