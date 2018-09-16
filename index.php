<?php require 'database/dbCon.php'; ?>

<?php 

$error=[
    'wrongPassword'=> '',
    'wrongUsername'=>''
];

if(isset($_POST['username']) && isset($_POST['password'])){
    // echo $_POST['username']." // ".$_POST['password'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $getPassword=$connect->prepare("select password from student_table where username='$username';");
    $getPassword->execute();
    $userPassword=$getPassword->fetchAll(PDO::FETCH_OBJ);

    // print_r($userPassword);
    // print_r($userPassword[0]->password);
    // echo $userPassword[0]->password;

    if(!empty($userPassword)){
        if($password == $userPassword[0]->password){
            // require 'home.php';
            /* if username and password correct then goto home.php page
                Using [ header() ] function.

                header('Location: / page location / ');
            */
            header('Location:home.php');
            exit(); // exit this page.
        
        }else{
            $error['wrongPassword']='Please type right Password';
        }
    }else{
        $error['wrongUsername']='Please type right Username';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="public/bootstrap.min.css">
</head>
<body >
    <div class='container'>
        <div class='row' style='width:60%; margin: auto; margin-top:50px;'>
            <div class='col-lg-12'>
            <div class='card-title' style='text-align: center; margin-top: 50px; margin-bottom: 80px; border: 1px solid rgba(0, 0, 0, 0.507); border-radius: 10px; padding: 20px; box-sizing: border-box; '>
            <h1>Student Information Login Page</h1>
            </div>

            <!-- Show error in page -->
            <?php if(!empty($error['wrongPassword'])):?>
            <div class='alert alert-danger'>
                <p><?=$error['wrongPassword'];?></p>
            </div>
            <?php endif;?>
            <?php if(!empty($error['wrongUsername'])):?>
            <div class='alert alert-danger'>
                <p><?=$error['wrongUsername'];?></p>
            </div>
            <?php endif;?>

            <!-- Form for get username and password -->
            <form action="" method="post" class='form'>
                <div class='form-group'>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" class='form-control'>
                </div>
                <div class='form-group'>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class='form-control'>
                </div>
                <div class='form-group'>
                    <input type="submit" value="Login" id='loginBtn' class='btn btn-outline-primary' style='width: 100%; padding-top: 15px; padding-bottom: 15px;'>
                </div>
                <div style='text-align: right; '> Or Registration, Please go to...    <a href="reg.php">Reg page</a></div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>