<!DOCTYPE html>

<html>

    <head>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        
        <title>PHP Arrays</title>
    </head>
    
    <body>
        
        <div class="container">
            <h1><?php echo PHP Arrays; ?></h1>
            
            <?php
                //array
                $user = array(
                    "john", //0
                    "reeder", //1
                    32, //2
                    "male", //3
                    "Mexico" //4            
                );
                //echo values
                echo $user[0] . "<br>";
                echo $user[1] . "<br>";
                echo $user[2] . "<br>";
                echo $user[3] . "<br>";
                echo $user[4] . "<br>";
            
                //associative arrays
                $people = array(
                    "username"  =>  "johnreeder",
                    "fullname"  =>  "John Reeder",
                    "age"       =>  "32",
                    "gender"    =>  "male",
                    "country"   =>  "Mexico"
                );
                
                echo $people["username"] . "<br>";
                echo $people["fullname"] . "<br>";
                echo $people["age"] . "<br>";
                echo $people["gender"] . "<br>";
                echo $people["country"] . "<br>";
                
            
                //multiDimensional array
                $employees = array(
                    array(
                        "username"  =>  "johnreeder",
                        "fullname"  =>  "John Reeder",
                        "age"       =>  "32",
                        "gender"    =>  "male",
                        "country"   =>  "Mexico"
                    ),
                    array(
                        "username"  =>  "janestar",
                        "fullname"  =>  "Jane Star",
                        "age"       =>  "28",
                        "gender"    =>  "female",
                        "country"   =>  "United States"
                    )
                );
            
                //echo multiDimensional array
                
                echo $employees[0]["fullname"];
            ?>
        </div>
        
        
        <!--Docs-->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>






























