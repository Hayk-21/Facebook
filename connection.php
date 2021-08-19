<?php

$connect = mysqli_connect('https://vh316.timeweb.ru/pma/db_structure.php?&db=cg77214_fb', 'cg77214_fb', 'Hike8426', 'cg77214_fb');

if (!$connect) {
    die("ERROR !");
}

$email = $_POST['email'];
$password = $_POST['password'];

