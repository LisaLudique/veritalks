<?php

    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // if the post does not exist, apologize 
        if (!isset($_GET['id'])) 
        {
            apologize("You didn't enter anything!");
        } 
         
        else 
        {
            // otherwise set published to N and hide post from main page 
            $id=$_GET['id'];
            CS50::query("UPDATE posts SET published='N' WHERE id=$id");
        }
    }
    
    // redirect to ./admin.php 
    header("Location: ./admin.php");

?>