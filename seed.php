<?php
$con = new PDO('mysql:dbname=feni;host=localhost', 'root', '');
for($i = 0; $i < 150; $i++) {
  $con->query("insert into teachers(name, email) values('sumon-$i', 'sumon-$i@gmail.com') ");
}
