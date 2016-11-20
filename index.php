<?php
/**
 * Created by PhpStorm.
 * User: teacher
 * Date: 19.11.2016
 * Time: 20:43
 */

$db = new SQLite3('db.sqlite');

if (filesize('db.sqlite') == 0) {
    $sql = "create table foo(id INTEGER PRIMARY KEY, name, email, age)";
    $db->exec($sql);
}

// commit
//12312312
$name = 'Neo';
$sql = "INSERT INTO foo VALUES (null, '$name', 'neo@gmail.com', '23')";
$db -> exec($sql);

echo $db->changes();