<?php
/**
 * Created by PhpStorm.
 * User: teacher
 * Date: 26.11.2016
 * Time: 18:08
 */

namespace App\Test\Foo;

function count()
{
    echo __FUNCTION__;
}

count();

// \обратный слеш как обращение к корню
// наймспей должен объявляться первым. Если нет, то ошибка
// namespace App\Test\Foo сработает даже если таких папок нет
// Можно объявлять несколько неймспейсов в файле, но не рекомендуется
// лучше всего разносить неймспейсы по разным файлам
// Грубо говоря классы можно представить как файлы, а неймспейсы как папки
// Т.е. нужно объявлять класс в своейм неймспейсе


echo \count([1, 2, 3]);
echo \strlen ('ssss');