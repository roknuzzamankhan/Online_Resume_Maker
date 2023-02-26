<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/registration.css?v=<?php echo time(); ?>">
    <title>Registration</title>
</head>
<body>
    <div>
    <div class="map"></div>
        <div id="login_section">
            <div id="login_border">
                <p class="main">Registration</p>
                <form action="registration.php" method="POST">
                    <input type="text" placeholder="First Name" id="fname" name="fname" required>

                    <input type="text" placeholder="Last Name" id="lname" name="lname" required>

                    <input type="text" placeholder="Email" id="email" name="email" required>

                    <input type="password" placeholder="Password" id="password" name="password" required>

                    <input type="password" placeholder="Re-Password" id="re_password" name="re_password" required>

                    <button type="submit" name="register" id="register">Register</button><br>
                </form>
                <p>Already have a account? <a href="index.php" id="new_account">Log in</a></p>
            </div>
        </div>


<?php
    if(isset($_POST['register'])){
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $email= $_POST['email'];
        $pass= $_POST['password'];
        $re_pass= $_POST['re_password'];

        if($pass==$re_pass){
            $query= "SELECT*FROM user WHERE email='$email' ";
            $query_check= mysqli_query($con,$query);

            if($query_check){
                if(mysqli_num_rows($query_check)>0){
                    echo "
                        <script>
                            alert('Email Already in use');
                            window.location.href='index.php';
                        </script>
                    ";
                }
                else{
                    $insertion= "INSERT INTO user (fname,lname,email,password,re_password) VALUES ('$fname','$lname','$email','$pass','$re_pass')" ;
                    $run= mysqli_query($con,$insertion);
                    if($run){
                        echo "
                        <script>
                            alert('You are successfully registered');
                            window.location.href='index.php';
                        </script>
                    ";
                    }
                    else{
                        echo "
                        <script>
                            alert('Connection Failed');
                            window.location.href='registration.php';
                        </script>
                    ";
                    }
                }
            }
            else{

            }
        }
        else{
            echo "
                <script>
                    alert('Password Not Match');
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