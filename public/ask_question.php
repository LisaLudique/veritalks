<?php

    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("question_form.php", ["title" => "Ask a Question"]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["question"]))
        {
            apologize("You didn't enter anything!");
        }
        
        else
        {
            // insert user input into question column of database 
            CS50::query("INSERT INTO posts (post) VALUES(?)", $_POST["question"]);
            
            // render form 
            render("submitted_question.php", ["title" => "Submitted!"]);
        }

    }
?>