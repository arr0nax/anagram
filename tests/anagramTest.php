<?php
    require_once "src/anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_compare_words_words_match()
        {
            //Arrange
            $input = 'bread';
            $test_anagram = new Anagram($input);

            //Act
            $result = $test_anagram->compare_words('bread');

            //assert
            $this->assertEquals($result, $input);
        }

        function test_compare_words_word_contains()
        {

            //Arrange
            $input = 'bread';
            $test_anagram = new Anagram($input);

            //Act
            $result = $test_anagram->compare_words('braed');

            //Assert
            $this->assertEquals('braed', $result);
        }

        function test_compare_words_word_contains_array()
        {

            //Arrange
            $input = 'bread';
            $test_anagram = new Anagram($input);

            //Act
            $result = $test_anagram->compare_words('braed bared drabe rabed salad');

            //Assert
            $this->assertEquals('braed bared drabe rabed', $result);
        }

        function test_compare_words_word_contains_partial_array()
        {

            //Arrange
            $input = 'bread';
            $test_anagram = new Anagram($input);

            //Act
            $result = $test_anagram->compare_words('braed bared drabe rabed bare salad');

            //Assert
            $this->assertEquals('braed bared drabe rabed bare', $result);
        }
    }






?>
