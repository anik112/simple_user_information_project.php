<?php require 'dbCon.php' ?>

<?php

$studentTable = $connect->prepare('drop table if exists student_table;');
$studentTable = $connect->prepare("create table student_table(
    	id serial,
        name varchar(30),
        email varchar(30),
        number varchar(15),
        gander varchar(10),
        username varchar(30),
        password varchar(30),
        primary key(id)
)");
$studentTable->execute();


// $studentTable = $connect->prepare('drop table if exists student_table;');
// $studentTable = $connect->prepare("create table student_table(
//     	id serial,
//         name varchar(30),
//         email varchar(30),
//         number varchar(15),
//         gander varchar(10),
//         username varchar(30),
//         password varchar(30),
//         primary key(id)
// )");
