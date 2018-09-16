<?php require 'database/dbCon.php' ?>

<?php

$error=[];


if(isset($_POST['name']) &&
    isset($_POST['email']) && 
    isset($_POST['number']) && 
    isset($_POST['gander']) && 
    isset($_POST['username']) && 
    isset($_POST['password']) ){
        

        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $gander=$_POST['gander'];
        $username=$_POST['username'];
        $password=$_POST['password'];

        $statementAdd=$connect->prepare("insert into student_table(name,email,number,gander,username,password) values ('$name','$email','$number','$gander','$username','$password');");
        $statementAdd->execute();
        
        $error['add']='record add successfull';

    }
?>


<?php require 'header.php' ?>

    <div class='container' style='width:80%; margin: auto;'>
    <div class='title' style='margin-top:50px;'>
    <h1>Registration in this page.</h1>
    </div>
    <div class='row' style='margin-top:50px;'>
        <div class='col-sm-12'>
        <?php if(!empty($error)):?>
        <div class='alert alert-success' style='text-align: center;'>
        <p><?=$error['add']?></p>
        </div>
        <?php endif; ?>
            <form action="" method="post" class='form'>
                <div class='form-group'>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class='form-control' required>
                </div>
                <div class='form-group'>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="name" class='form-control' required>
                </div>
                <div class='form-group'>
                    <label for="number">Number:</label>
                    <input type="text" name="number" id="number" class='form-control'  required>
                </div>
                <div class='form-group'>
                    <label for="gander">Gander:</label>
                    <select name="gander" id="gander" class='form-control'>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Other</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" class='form-control' required>
                </div>
                <div class='form-group'>
                    <label for="password">Password:</label>
                    <input type="text" name="password" id="password" class='form-control' required>
                </div>
                <div class='form-group'>
                    <input type="submit" value="Registration" id='Registration' class='btn btn-primary' style='width:100%; padding-top: 20px; padding-bottom: 20px;'>
                </div>
            </form>
        </div>
    </div>
    </div>

<?php require 'footer.php' ?>