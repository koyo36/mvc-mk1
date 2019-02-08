<?php

class Edit extends Controller
{

    public function index( $id = '' )
    {
        
        $todo = $this->model('Todo');
        $todo->id = $id;

        $getTask = $todo->getTask($id);
        
        if( !isset( $_POST['task'] ) )
        {
            $_POST['id'] = $getTask->Id;
            $_POST['task'] = $getTask->task;
        }
        $todo->editTask( $id, $_POST['task'] );

        $this->view('task/edit', ['id' => $id]);

    }

    public function view( $view, $data = [] )
    {
        require_once '../app/views/'.$view.'.php';
    }

}