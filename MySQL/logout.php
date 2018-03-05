<?php

//browser cookie?
    if (isset($_COOKIE[session_name()])){
        
        //empty cookie
        setcookie(session_name(), '', time()-86400, '/');
    }


//clear all session vars
    session_unset();

//destroy the session
    session_destroy();

    echo "You have been logged out. See you next time!<br>";

    echo "<p><a href='login.php'>Log In Page</a></p>";

?>
