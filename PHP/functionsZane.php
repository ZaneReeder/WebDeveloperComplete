<?php
    
    
    function checkForClickBait() {
        //store clickbait headline to var all lowercase
        $clickbait = strtolower($_POST["clickbait_headline"]);

        $a = array(
            "scientists",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "trick",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"
        );

        $b = array(
            "so-called scientists",
            "so-called doctors",
            "aren't threatened by",
            "average",
            "completely normal",
            "ineffective",
            "method",
            "is no different than the others",
            "you won't really be surprised by",
            "slightly improve",
            "boring",
            "normal"
        );

        $honestHeadline = str_replace($a, $b, $clickBait);
        
        //return array of variables
        return array($clickBait, $honestHeadLine);
    }

    function displayHonestHeadline($clickBait, $honestHeadLine) {
        echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($clickBait)."</h4><hr>";

        echo "<strong class='text-primary'>Honest Headline</strong><h4>".ucwords($honestHeadline)."</h4>";
        }
?>
