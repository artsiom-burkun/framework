<?php

namespace App;

use \Core\App;

class PageController extends Controller
{
    public function index()
    {
        $tasks = App::get('query')->selectAll('tasks');

        require "Views/index.view.php";
    }

    public function add()
    {
        $task = $_POST['task'];
        if(! strlen($task)){
            \Core\Request::back();
            die;
        }

        App::get('query')->insert('tasks', [
            'title' => $task,
            'complete' => false
        ]);


        \Core\Request::back();
    }

    public function remove()
    {
        if(isset($_GET['taskid'])){
            $id = (int) $_GET['taskid'];

            $this->app['query']->delete('tasks', [
                'id' => $id
            ]);

            \Core\Request::back();
        }
    }

    public function update()
    {
        if(isset($_GET['taskid'])){
            $id = (int) $_GET['taskid'];

            App::get('query')->update('tasks', ['complete' => 1], [
                'id' => $id
            ]);
        }

        \Core\Request::back();
    }
}