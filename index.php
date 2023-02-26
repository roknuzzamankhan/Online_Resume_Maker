<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/index.css?v=<?php echo time(); ?>">
    <title>Login</title>
</head>
<body>
    <div class="map">
        <div class="map_text">
            <p>Make Your <br> Professional CV <br> very easily.</p>
        </div>
    </div>
    <div id="login_section">
        <div id="login_border">
            <p class="main">LogIn</p>
            <form action="index.php" method="POST">
                <input type="text" placeholder="Email" id="email" name="email" required>
                <input type="password" placeholder="Password" id="password" name="password" required>
                <button type="submit" name="login" id="login">Log In</button><br>
            </form>
            <a href="#" id="forgot">Forgotten password?</a>
            <p>New member? <a href="registration.php" id="new_account">Create a new account</a></p>
        </div>

<?php 
if(isset($_POST['login'])){
    $email= $_POST['email'];
    $pass= $_POST['password'];

    $query= "SELECT*FROM user WHERE email='$email' AND password='$pass' ";
    $check= mysqli_query($con,$query);
    if($check){
        if(mysqli_num_rows($check)>0){
            echo"
                <script>
                alert('You are Successfully Logged In');
                window.location.href='user_profile_update.php';
                </script>
            ";
        }
        else{
            echo"
            <script>
            alert('You are not Registered yet');
            window.location.href='registration.php';
            </script>
        ";
        }
    }
    else{
        echo"
        <script>
        alert('Database Error');
        window.location.href='login.php';
        </script>
    ";
    }
}
else{

}
?>
    </div>
</body>
</html>