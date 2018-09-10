<?php


namespace view;

class metricsView {
    private $codeAreaIndex = "data";

    function getTitle() {
        return "<title>temp title</title>";
    }

    private function hasCode () {
        return isset($_POST[$this->codeAreaIndex]);
    }

    private function getCode() {
     
        $haveCode = $this->hasCode();

        if($haveCode === true) {
            return $_POST[$this->codeAreaIndex];
        } else {
            return "";
        }
    }

    private function getForm() {

        $codeInPost = $this->getCode();

        return '<form action="index.php" method="POST">
        <h1>Enter data to analyze</h1>
        <textarea name="' .$this->codeAreaIndex . '" type="text" rows="20" cols="60">' . $codeInPost. '</textarea>
        <input type="submit">
        </form>';
    }



    public function getMetricsHthml() {
        
        $codeInPost = $this->getCode();

        $numberOfLetters = $this->countLetters($codeInPost);
        
        $howManyWords = $this->countWords($codeInPost);

        $form = $this->getForm();


        return "$form <br> $numberOfLetters <br> $howManyWords"; 
    }

    /* 
    Returns amount of words in as string
    */

    private function countWords($data) {
        //TODO use metricsExtractor
        $wordsInInput = str_word_count($data);
    
        return "The text cosists of $wordsInInput word(s)";
    }


    /* 
    Returns 
    */

    private function countLetters($data) {
        //TODO use metricsExtractor
        $characterCount = count_chars($data,1);
        $result = "";

        foreach($characterCount as $key => $value){

            $result.= "The character <b>'".chr($key)."'</b> was found $value time(s)<br>\n";
        }
        return $result;
    }

}