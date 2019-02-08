<?php

class Task extends Controller
{
    public function index( $name = '' )
    {
        $todo = $this->model('Todo');

        $tasks = $todo->getTasks();

        $_POST['tasks'] = $tasks;

        $this->view('task/index');
    }

    public function view( $view, $data = [] )
    {
        require_once '../app/views/'.$view.'.php';
    }



    // DUNNO


}