<?php

    
$hostName='localhost';
$dbName='student_info';
$dbUserName='root';
$dbPassword='';

$connect=new PDO("mysql:host=$hostName;dbname=$dbName","$dbUserName","$dbPassword");
