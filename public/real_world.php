<?php 

    require("../includes/config.php"); 
    require("../views/header.php");
    echo "<hr style='height:10px;border:none;color:#444;background-color:#444;' />";

    // set variables
    $limit = 20;
    $numresults = CS50::query("SELECT * FROM posts WHERE published='Y' AND real_world='1'");
    $numrows = count($numresults);
    
    // set offset
    if (isset( $_GET['offset'])) 
    {
        $offset = $_GET['offset'];
    }
    
    // check if offset is empty
    if (empty($offset))
    {
        $offset = 0;
    }
    
    // find published and tagged posts
    $result = CS50::query("SELECT id, post, answer, time, upvotes FROM posts WHERE published='Y' AND real_world='1' order by time desc limit $offset, $limit");
    
    // apologize if results do not exist
    if(!$result)
    {
        apologize("There was an error loading the page");
    }
    
    // now you can display the results returned 
    foreach ($result as $row) 
    {
        $id = $row['id'];
        $vote= $row['upvotes'] ;
        echo "<p class='left'>";
        echo "<b>Anonymous said: </b>";
        echo $row['post'] . "<br><br>";
        echo $row['answer'] . "<br><br>";
        echo "<b>Submitted at </b>";
        echo $row['time'];
        echo "<center>";
        echo "<a href='real_world_upvote.php?id={$id}&upvote={$vote}' onclick=\"return confirm('Like this?')\">". $row['upvotes'] . " people found this helpful. Do you?</a>";
        echo "</center>";
        echo "</p>";
    } 
    
    // to go to previous, -20 from offset
    $prevoffset = $offset - $limit;
    
    // make sure offset isn't less than zero
    if($prevoffset < 0) 
    {    
        $prevoffset = 0; 
    }
    
    // display link to previous page
    print "<a href=real_world_user.php?offset=$prevoffset>PREV</a> &nbsp; \n";
    
    // set number of pages
    $pages = intval($numrows / $limit);
    
    // if there are remaining posts, add a page
    if ($numrows % $limit)
    {
        $pages++;
    }
    
    
    // set offset in URL
    for ($i = 1;$i <= $pages;$i++)
    {
        $newoffset=$limit * ($i - 1);
        print "<a href=real_world_user.php?offset=$newoffset>$i</a> &nbsp; \n";
    }
    
    // if current page is not last page and total pages is not equal to one, output next button 
    if (!(($offset / $limit) == $pages) && $pages != 1)
    {
    $newoffset = $offset + $limit;
    }
    
    // ensure that the new offset is not greater than the total number of posts 
    if ($newoffset > $numrows)
    { 
        $newoffset = $offset;
    }

    // print next page with new URL
    print "<a href=real_world_user.php?offset=$newoffset>NEXT</a><p>\n";
    
    echo "<hr style='height:10px;border:none;color:#444;background-color:#444;' />";
    
    require("../views/footer.php"); 
    
?> 