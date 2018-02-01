<?php

$con = new PDO('mysql:dbname=feni;host=localhost', 'root', '');
$con->query("
  create table teachers (
    id int(11) auto_increment primary key,
    name varchar(30) not null,
    email varchar(30) not null
  )
  ");