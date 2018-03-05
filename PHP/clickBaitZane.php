<?php
    define("TITLE", "Honest Click Bait Headlines");
    include("functions.php")
        
    if (isset($_POST["fix_submit"])){
        //call function
        $bait&headline = checkForClickBait();
    }
?>

<!DOCTYPE html>

<html>

    <head>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        
        <title><?php echo TITLE;?></title>
    </head>
    
    <body>
        
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            <p>
                Hate click bait? Turn those headlines into honest ones using this amazing program.
            </p>
            
            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make Honest!</button>
                </form>
            </div>
            
            <?php
                if (isset($_POST["fix_submit"])){
                    $clickBait = $bait&headline[0];
                    $honestHeadline = $bait&headline[1];
                    
                    //pass args in function
                    displayHonestHeadline($clickBait, $honestHeadline);
                }
            ?>
            
        </div>
        
        <!--Docs-->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>






























