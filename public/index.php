<?php

    // set session id
    if (isset($_GET["id"]))
    {
        $id = $_GET["id"]; 
        $_SESSION["id"] = $id ;
    }
    
    // else set it to the default
    else 
    {
        $_SESSION["id"] = "default";  
    }

    // configuration
    require("../views/header.php");
    require("../includes/config.php"); 
    echo "<hr style='height:10px;border:none;color:#444;background-color:#444;' />";

    // set variables
    $limit = 20;
    $numresults = CS50::query("SELECT * FROM posts");
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
   
    // get all posts submitted
    $result = CS50::query("SELECT id, post, answer, time, published FROM posts ORDER BY time desc LIMIT $offset, $limit");
    
    // apologize if results do not exist
    if (!$result)
    {
        apologize("There was an error loading the page");
    }
    
    // display results
    foreach($result as $row)
    {
        $id=$row['id'];
        $answer=$row['answer'];
        echo "<p class='left'>";
        echo "<b>ID: </b>";
        echo $row['id']."<br>";
        echo "<b>Post: </b>";
        echo $row['post']."<br>";
        echo "<b>Response: </b>";
        echo $row['answer']."<br>";
        echo "<b>Submitted at </b>";
        echo $row['time']."<br>";
        echo "<b>Published? </b>";
        echo $row['published']."<br>";
        echo "<center>";
        echo "<a href='delete.php?id={$row['id']}' onclick=\"return confirm('Delete this?')\">Delete</a>";
        echo " | ";
        echo "<a href='update.php?id={$id}&answer={$answer}'>Answer</a>";
        echo " | ";
        echo "<a href='publish.php?id={$row['id']}' onclick=\"return confirm('Publish this?')\">Publish</a>";
        echo " | ";
        echo "<a href='hide.php?id={$row['id']}' onclick=\"return confirm('Hide this?')\">Hide</a>";
        echo "</center>";
        echo "<br>";
        echo "</p>";
    }
    
    // to go to previous, -20 from offset
    $prevoffset = $offset - $limit;
    
    // make sure offset isn't less than zero
    if( $prevoffset < 0) 
    {    
        $prevoffset = 0; 
    }
    
    // display link to previous page
    print "<a href=admin.php?offset=$prevoffset>PREV</a> &nbsp; \n";
    
    // set number of pages
    $pages = intval($numrows / $limit);
    
    // if remaining posts exist add a page
    if ($numrows % $limit)
    {
        $pages++;
    }
    
    // set offset in URL
    for ($i = 1; $i <= $pages; $i++)
    {
        $newoffset = $limit*($i-1);
        // display page numbers
        print "<a href=admin.php?offset=$newoffset>$i</a> &nbsp; \n";
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
    
    // show link to next page with new offset in URL
    print "<a href=admin.php?offset=$newoffset>NEXT</a><p>\n";
    
    echo "<hr style='height:10px;border:none;color:#444;background-color:#444;' />";
    
    require("../views/footer.php"); 

?>
