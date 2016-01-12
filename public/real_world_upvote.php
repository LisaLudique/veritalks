<?php
 
    require("../includes/config.php");
 
    // if user reached page via GET (as by clicking a link or via redirect)
    if (!isset($_GET['upvote'])) 
    {
        apologize("You didn't enter anything!");
    } 
    
    else 
    {
        $id = $_GET['id'];
        $new = 0;
        // increment upvote
        $new = $_GET['upvote'] + 1;
        // update post's upvotes
        CS50::query("UPDATE posts SET upvotes='". $new . "'  WHERE id='" . $id ."'");
    }
    
    // forces URL change so browser obtains latest data
    $millitime = round(microtime(true) * 1000);
    header("Location: /real_world.php?UTC={$millitime}&NEW={$new}&SQL={$s}");
 
?>