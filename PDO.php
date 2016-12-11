<?php
/**
 * Created by PhpStorm.
 * User: teacher
 * Date: 27.11.2016
 * Time: 17:17
 */

try {
    //$pdo = new PDO('mysql:host=localhost;dbname=smart', 'root', '');
    $pdo = new PDO('sqlite:database.sqlite');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $name = $pdo-> quote('Morpheus');
    $email = $pdo-> quote("neo@mail.ru");

    $cnt



}
