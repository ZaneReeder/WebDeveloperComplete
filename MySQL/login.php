<?php

    if( isset($_POST['login'])) {
        
        function validateFormData($formData) {
            $formData = trim(stripslashes(htmlspecialchars($formData)));
            return $formData;
        }
        
        //create variables
        $formUser = validateFormData($_POST['username']);
        $formPass = validateFormData($_POST['password']);
        
        //connect to database
        include('connection.php');
        
        //create SQL Query
        $query = "SELECT username, email, password FROM users WHERE username = '$formUser'";
        
        //store result
        $result = mysqli_query($conn, $query);
        
        //verify result
        if (mysqli_num_rows($result)>0){
            //store basic user data
            while( $row = mysqli_fetch_assoc($result)) {
                $user           = $row['username'];
                $email          = $row['email'];
                $hashedPass     = $row['password'];
            }
            
            if (password_verify($formPass, $hashedPass)){
                //correct login details
                //start session
                session_start();
                //store data in session vars
                $_SESSION['loggedInUser'] = $user;
                $_SESSION['loggedInEmail'] = $email;
                
                header("Location: profile.php");
                
            } else {//Incorrect pass or username
                $loginError = "<div class='alert alert-danger'>Incorrect username or password. Please try again.<a class='close' data-dismiss='alert'>&times;</a></div>";
            }
        } else { //no results in database
            $loginError = "<div class='alert alert-danger'>Username not found. Please try again.<a class='close' data-dismiss='alert'>&times;</a></div>";
        }
        
        //close mysql connection
        mysqli_close($conn);
    }
?>


<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <title>MySQL Insert</title>
    </head>
    
    <body>
        <div class="container">
            <h1>Login</h1>
            <p class="lead">Use this form to log-in to your account</p>
            
            <?php echo $loginError; ?>
            
            <form class="form-inline" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="post">
                
                <div class="form-group">
                    <label for="login-username" class="sr-only">Username</label>
                    <input type="text" class="form-control" id="login-username" placeholder="username" name="username">
                    
                    <label for="login-password" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="login-password" placeholder="password" name="password">                
                </div>
                <button type="submit" class="btn btn-default" name="login">Log in!</button>
                
            </form>
        
        </div>
        
        
        
        
        <!--Docs-->
        <!--JQuery-->
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>