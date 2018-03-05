<?php
session_start();

include('includes/functions.php');

if (isset($_POST['login'])) {
    
    $formEmail = validateFormData($_POST['email']);
    $formPassword = validateFormData($_POST['password']);
    
    //connect to database
    include('includes/connection.php');
    
    $query = "SELECT name, password FROM users WHERE email = '$formEmail'";
    
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
            $name               =$row['name'];
            $hashedPass         =$row['password'];
        }
        
        if (password_verify($formPass, $hashedPass)) {
            
            $_SESSION['loggedInUser'] = $name;
            
            header("Location: clients.php");
        } else {
            //Password error
            $loginError = "<div class='alert alert-danger'>Incorrect Username or Password. <a class='close' data-dismiss='alert'>&times;</a></div>";
        }
    } else { //no username error
        $loginError = "<div class='alert alert-danger'>Username does not exist. <a class='close' data-dismiss='alert'>&times;</a></div>";
    }
}

mysqli_close($conn);

include('includes/header.php');

//$password = password_hash("abc123", PASSWORD_DEFAULT);
//echo $password;



?>

<h1>Client Address Book</h1>
<p class="lead">Log in to your account.</p>

<?php echo $loginError; ?>

<form class="form-inline" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
    <div class="form-group">
        <label for="login-email" class="sr-only">Email</label>
        <input type="text" class="form-control" id="login-email" placeholder="email" name="email" value="<?php echo $formEmail; ?>">
    </div>
    <div class="form-group">
        <label for="login-password" class="sr-only">Password</label>
        <input type="password" class="form-control" id="login-password" placeholder="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="login">Login</button>
</form>

<?php
include('includes/footer.php');
?>