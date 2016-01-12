<?php

    /**
     * config.php
     *
     * Computer Science 50
     * Veritalks
     *
     * Configures app.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("helpers.php");

    // CS50 Library
    require("../vendor/library50-php-5/CS50/CS50.php");
    CS50::init(__DIR__ . "/../config.json");

    // enable sessions
    session_start();

    // require authentication for certain pages except those listed below
    if (!in_array($_SERVER["PHP_SELF"], ["/login.php", "/logout.php", "/register.php","/main_page.php","/about_us.php",
    "/ask_question.php","/give_advice.php","/upvote.php","/user.php","/academics.php","/social_scene.php","/student_life.php",
    "/real_world.php","/prospective_students.php","/financial_aid.php","/academics_user.php","/social_scene_user.php",
    "/student_life_user.php","/real_world_user.php","/prospective_students_user.php","/financial_aid_user.php",
    "/academics_upvote.php","/social_scene_upvote.php","/student_life_upvote.php","/real_world_upvote.php",
    "/prospective_students_upvote.php","/financial_aid_upvote.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("main_page.php");
        }
    }

?>
