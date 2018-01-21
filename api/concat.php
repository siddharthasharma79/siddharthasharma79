<?php
    /**
    * Write a PHP program join letters from strings character by character.
    * e.g. given STAR + POWER = SPTOAWRER
    */
    
    $str1 = $_GET["str1"];
    $str2 = $_GET["str2"];

    // function to concate two string by alternate character of each string
    function concatString( $str1, $str2 ) {
        // variable to hold contactinated string
        $concat_str = "";

        // calculating max of number characters between two strings
        $counter = max( trim(strlen( $str1 )), trim(strlen( $str2 )) );

        // Building concatated string by looping through each string
        for( $i = 0; $i < $counter; $i++ ) {
            @$concat_str .= $str1[$i] . $str2[$i];
        }
        
      echo $concat_str;
      //echo '{"result" : "'.$concat_str.'"}.';
    }
    concatString($str1, $str2);
?>
