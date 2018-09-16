<?php require 'database/dbCon.php'?>

<?php
$id=$_GET['id'];

$statement=$connect->prepare("select * from student_table where id=$id;");
$statement->execute();
$student=$statement->fetchAll(PDO::FETCH_OBJ);

?>

<?php require 'header.php'?>

<div class='row' style='width: 60%; margin: auto; margin-top: 100px; margin-bottom: 100px;'>
    <div class='col-lg-12' style='text-align: center; border: 1px solid rgba(0, 0, 0, 0.384); border-radius: 10px;'>
        <h1 style='font-size: 55px; margin-top: 15px; margin-bottom:40px; border-bottom: 2px solid rgba(0, 0, 0, 0.384); padding:10px;'>
            <?= $student[0]->name; ?>
        </h1>
        <strong style='font-size: 20px; color: rgba(0, 0, 0, 0.384); display:block; margin-top: 15px; margin-bottom:15px;'>
            <?= $student[0]->email;?>
        </strong>
        <strong style='font-size: 20px; color: rgba(0, 0, 0, 0.384); display:block; margin-top: 15px; margin-bottom:15px;'>
            <?= $student[0]->number;?>
        </strong>
        <strong style='font-size: 20px; color: rgba(0, 0, 0, 0.384); display:block; margin-top: 15px; margin-bottom:15px;'>
            <?= $student[0]->gander;?>
        </strong>
        <strong style='font-size: 20px; color: rgba(0, 0, 0, 0.384); display:block; margin-top: 15px; margin-bottom:15px;'>
            <?= $student[0]->username;?>
        </strong>
        <strong style='font-size: 20px; color: rgba(0, 0, 0, 0.384); display:block; margin-top: 80px; margin-bottom:15px;'>
            <a href="home.php">Goto Home</a>
        </strong>
    </div>
</div>
<?php require 'footer.php' ?>