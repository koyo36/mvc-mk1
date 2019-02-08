<?php

class Delete extends Controller
{
    public function index( $id = '' )
    {
        $todo = $this->model('Todo');
        $todo->id = $id;
        
        $task = $todo->deleteTask($id);

        $this->view('task/delete', ['id' => $id]);
    }

    public function view( $view, $data = [] )
    {
        require_once '../app/views/'.$view.'.php';
    }



}