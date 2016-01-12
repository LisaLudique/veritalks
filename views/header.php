<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Veritalks: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Veritalks</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>
        
        <style> 
            a:link {
                color: darkred;
            }
            a:visited {
                color: darkred;
            }
            a:hover {
                color: crimson;
            }
            a:active {
                color:darkred;
            }
            body {
                background-color: #FFFAFA;
            }
        </style>
        
    </head>

    <body>

        <div class="container">

            <div id="top">
                
                <div>
                    <a href="/"><img alt="Veritalks" src="/img/vlogo.png"/></a>
                </div>
                
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="ask_question.php">Ask a Question</a></li>
                        <li><a href="give_advice.php">Give Advice</a></li>
                        <li><a href="logout.php"><strong>Log Out</strong></a></li>
                    </ul>
                    
                <?php else: ?>
                    <ul class="nav nav-pills">
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="ask_question.php">Ask a Question</a></li>
                        <li><a href="give_advice.php">Give Advice</a></li>
                        <li><a href="academics.php">Academics</a></li>
                        <li><a href="social_scene.php">Social Scene</a></li>
                        <li><a href="student_life.php">Student Life</a></li>
                        <li><a href="real_world.php">Real World</a></li>
                        <li><a href="prospective_students.php">Prospective Students</a></li>
                        <li><a href="financial_aid.php">Financial Aid</a></li>
                        <li><a href="login.php"><strong>Log In</strong></a></li>
                    </ul>
                    
                <?php endif ?>
                
            </div>

        <div id="middle">
