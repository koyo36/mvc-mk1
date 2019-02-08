<?php

class Todo 
{
    public $_pdo,   
           $id,
           $instance;

    public function __construct()
    {
        $instance = DB::getInstance();
        $this->_pdo = $instance->getConn();
    }

    public function getTasks() 
    {

        $sql = "SELECT * FROM tasks";
        $req = $this->_pdo->prepare($sql);
        $req->execute();

        return $req->fetchAll(PDO::FETCH_OBJ);  
    }

    public function getTask( $id )
    {
        $sql = "SELECT * FROM tasks WHERE id = ?";
        $req = $this->_pdo->prepare($sql);
        $req->execute([$id]);

        return $req->fetch(PDO::FETCH_OBJ);
    }

    public function deleteTask( $id )
    {
        $sql = "DELETE FROM tasks WHERE id = ?";
        $req = $this->_pdo->prepare($sql);

        return $req->execute([$id]);
    }

    public function createTask( $task )
    {
        $sql = "INSERT INTO tasks ( task ) VALUES ( :task ) ";
        $req = $this->_pdo->prepare( $sql );

        return $req->execute([ $task ]);
    }

    public function editTask( $id, $task )
    {
        var_dump($id);
        var_dump($task);

        $sql = "UPDATE tasks SET task = :task WHERE id = :id";
        $req = $this->_pdo->prepare($sql);

        return $req->execute([
            'id'        => $id,
            'task'      => $task
        ]);
    }

}