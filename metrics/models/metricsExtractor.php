<?php

namespace models;


/**extracts metrics from code */
class metricsExtractor {

    private $codeText;

    /** String codeText*/
    public function __construct($codeText) {
        $this->codeText = $codeText;
    }

    /** returns int*/
    public function countWords() {
       return str_word_count($this->codeText);
    }

    
  /** return array with $key as index to a character that can be found by chr($key) and value is number of times this character occured  */
    private function countLetters() {
      return count_chars($this->codeText,1);
    }
}