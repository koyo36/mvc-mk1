<?php

class Create extends Controller 
{
    public function index( $task = '' )
    {
        $todo = $this->model('Todo');

        if( isset( $_POST['task'] ) )
        {
            $todo->createTask( $_POST['task'] );
            header('Location: ../task');
        }


        $this->view('task/create');
    }

    public function view( $view, $data = [] )
    {
        require_once '../app/views/'.$view.'.php';
    }
}