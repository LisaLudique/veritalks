<?php

    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("answer_form.php", ["title" => "Type an answer"]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
   	    if (!isset($_POST['id'])) 
   	    {
   	        apologize("You didn't enter anything!");
        }
        
        // update/add admin's response
        else
        {
            $id = $_POST['id'];
            $answer = $_POST['answer'];
            // track contributor
            $name = CS50::query("SELECT username FROM users WHERE id = ?", $_SESSION["id"]);
            
            // if checkbox for tag is checked, tag post for that category
            if (isset($_POST["tag"]))
            {
                if(in_array("Academics",$_POST["tag"]))
                {
                    CS50::query("UPDATE posts SET academics='1' WHERE id=$id");
                }
             
                if(in_array("Social_Scene",$_POST["tag"]))
                {
                    CS50::query("UPDATE posts SET social_scene='1' WHERE id=$id");
                }
             
                if(in_array("Student_Life",$_POST["tag"]))
                {
                    CS50::query("UPDATE posts SET student_life='1' WHERE id=$id");
                }
             
                if(in_array("Real_World",$_POST["tag"]))
                {
                    CS50::query("UPDATE posts SET real_world='1' WHERE id=$id");
                }
                 
                if(in_array("Prospective_Students",$_POST["tag"]))
                {
                    CS50::query("UPDATE posts SET prospective_students='1' WHERE id=$id");
                }
             
                if(in_array("Financial_Aid",$_POST["tag"]))
                {
                    CS50::query("UPDATE posts SET financial_aid='1' WHERE id=$id");
                }
            }

            // add contributor's username to their response
            $answer= "<b>Response from " . $name[0]["username"] . ":</b> <br>" . $answer;
            // update/add post's response
            CS50::query("UPDATE posts SET answer=? WHERE id=?", $answer ,$id);
        }
    }
   
    header("Location: ./admin.php");

?>