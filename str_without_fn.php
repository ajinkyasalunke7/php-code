<?php
    function len_str($str){
        $i = 0;
        while(@$str[$i] != ""){
            $i++;
        }
    return $i;
    }
    // print(len_str("Ajinkya"));
    function word_count($str){
        $str = trim($str);
        $word_count = count(explode(" ",$str));
        return "Word count is : ".$word_count; 
    }
    print(word_count("   Hi hello!   "));

    $str = "Hello world!";
    echo "<br/>";
    print(strlen($str)."<br/>");
    print(str_word_count($str)."<br/>");

?>