<?php
 
    require("../includes/config.php");
 
    // if user reached page via GET (as by clicking a link or via redirect)
    if (!isset($_GET['upvote'])) 
    {
        apologize("You didn't enter anything!");
    } 
        
    else 
    {
        // set variables 
        $id = $_GET['id'];
        $new = 0;
        // increment upvote by 1
        $new = $_GET['upvote'] + 1;  
        // update upvotes for the post
        CS50::query("UPDATE posts SET upvotes='". $new . "'  WHERE id='" . $id ."'");
    }
    
    // forces URL change so browser obtains latest data
    $millitime = round(microtime(true) * 1000);
    header("Location: /academics.php?UTC={$millitime}&NEW={$new}&SQL={$s}");
    
?>