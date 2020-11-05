<?php
if(!empty($_SESSION['username'])){
session_destroy();}
session_start();
include_once('dbconnection.php');
$error = false ;
if (isset($_POST['btn-login']))
{
    $email=trim($_POST['email']);
    $email= htmlspecialchars(strip_tags($email));

    $password=trim($_POST['password']);
    $password= htmlspecialchars(strip_tags($password));

    if (empty($email)){
        $error=true;
        $errorEmail = 'Please input your  email or your username' ;
    }
    if (empty($password)){
        $error=true;
        $errorPassword = 'Please input your password' ;
    }
    if(!$error){
        $password=md5($password);

        if ($email == 'admin' && $password == md5('admin')){
            $_SESSION['username']='admin';
            header("location:admin/blank.php");
        }else{
            $errorMsg= 'Invalid username or password';
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
    <div class="divform">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
            <center><h2>Login</h2></center>
        <hr/>
            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input type="text" name="email" class="form-control" autocomplete="off">
                <span class="text-danger" ><?php if (isset($errorEmail)) echo $errorEmail;?></span>
            </div>
            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <input type="password" name="password" class="form-control" autocomplete="off">
                <span class="text-danger" ><?php if (isset($errorPassword)) echo $errorPassword;?></span>
            </div>
            <div class="form-group">
                <center><input type="submit" name="btn-login" value="login" class="btn btn-primary"></center><hr/>
                <center><span class="text-danger" ><?php if (isset($errorMsg)) echo $errorMsg;?></span></center>
            </div>
            <hr/>


        </form>

    </div>

</div>



</body>
</html>

