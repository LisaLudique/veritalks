<?php

    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        if (!isset($_GET['id'])) 
        {
            apologize("You didn't enter anything!");
        } 
    
        else 
        {
            $id = $_GET['id'];
            // marks post as okay to publish
            CS50::query("UPDATE posts SET published='Y' WHERE id=$id");
        }
    }

    header("Location: ./admin.php");

?>