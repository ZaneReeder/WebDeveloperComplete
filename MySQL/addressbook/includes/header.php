<!DOCTYPE html>

<html>

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
    </head>
    
    <body style="padding-top: 60px;">            
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">

        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="clients.php">CLIENT<strong>MANAGER</strong></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                
                <?php
                if( $_SESSION['loggedInUser'] ) { // if user is logged in
                ?>
                <ul class="nav navbar-nav">
                    <li><a href="clients.php">My Clients</a></li>
                    <li><a href="add.php">Add Client</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <p class="navbar-text">Aloha, Brad!</p>

                    <li><a href="logout.php">Log out</a></li>
                </ul>
                <?php
                } else {
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Log in</a></li>
                </ul>
                <?php
                }
                ?>

            </div>

        </div>

    </nav>
        <!--Docs-->
        <!--JQuery-->
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>