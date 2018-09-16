<?php require 'database/dbCon.php' ?>

<?php

$statement=$connect->prepare('select * from student_table;');
$statement->execute();
$students=$statement->fetchAll(PDO::FETCH_OBJ);

?>

<?php require 'header.php' ?>

<div class='row my-5'>
    <div class='col-lg-12'>
        <div class='card-title' style='margin-bottom: 30px;'>
            <h1>All Student List</h1>
        </div>
        <?php foreach($students as $student):?>
        <div class='card my-3'>
            <div class='card-body'>
                <div class='card-title'>
                    <a href="student_profile.php?id=<?= $student->id; ?>"><h3><?= $student->name;?></h3></a>
                </div>
                <p><?=$student->email;?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require 'footer.php' ?>