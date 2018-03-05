<?php 

    include('connection.php'); 

    if( isset( $_POST["post_submit"] ) ) {
        
        // build a function that validates data
        function validateFormData( $formData ) {
            $formData = trim( stripslashes( htmlspecialchars( $formData )));
            return $formData;
        }
        
        // check to see if inputs are empty
        // create variables with form data
        // wrap the data with our function
        
        if( !$_POST["username"] ) {
            $nameError = "Please enter your username <br>";
        } else {
            $username = validateFormData( $_POST["username"] );
        }
        
        if( !$_POST["email"] ) {
            $emailError = "Please enter your email <br>";
        } else {
            $email = validateFormData( $_POST["email"] );
        }
    
        if( !$_POST["password"] ) {
            $passwordError = "Please enter your password <br>";
        } else {
            $password = validateFormData( $_POST["password"] );
        }
        
        $query = "INSERT INTO users (id, username, password, email, signup_date, biography) VALUES (NULL, '$username', '$password', '$email', CURRENT_TIMESTAMP, NULL)";
    
        if ( mysqli_query($connection, $query) ) {
            echo "NEW RECORD IN DATABASE";
        } else {
            echo "ERROR: ".$query."<br>".mysqli_error($connection);
        }
    
}

    mysqli_close($connection);
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
        <h1>MySQL Insert</h1>
        
        
        <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post">
                <small class="text-danger">* <?php echo $nameError; ?></small>
                <input type="text" placeholder="Username" name="username"><br><br>
                
                <small class="text-danger">* <?php echo $emailError; ?></small>
                <input type="text" placeholder="Email" name="email"><br><br>
                
                <small class="text-danger">* <?php echo $passwordError; ?></small>
                <input type="password" placeholder="Password" name="password"><br><br>
             
                <input type="submit" name="add" value="Add Entry">
        </form>
        
        <!--Docs-->
        <!--JQuery-->
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>