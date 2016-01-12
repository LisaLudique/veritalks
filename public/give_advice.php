<?php

    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("advice_form.php", ["title" => "Give Advice"]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["advice"]))
        {
            apologize("You didn't enter anything!");
        }
        
        else
        {
            // insert user input into advice column of database 
            CS50::query("INSERT INTO posts (post) VALUES(?)", $_POST["advice"]);
            render("submitted_advice.php", ["title" => "Submitted!"]);
        }

    }
?>