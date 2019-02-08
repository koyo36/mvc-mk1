<?php

    $tasks = $_POST['tasks'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="row">

            <div class="todo-app offset-md-3 col-md-6">

                <div class="card">
                    <div class="card-header">
                        Todo App
                        <br>
                        
                    </div>
                    <div class="list-group-item">
                        <a href="create/" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i>
                            Create new todo
                        </a>
                    </div>

                    <ul class="todo-tasks list-group list-group-flush">
                        
                        <?php

                            foreach( $tasks as $task)
                            {
                                

                                $task_html = '<li class="task justify-content-between list-group-item d-flex">';
                                $task_html .= '<div class="task-name" id="task-'.$task->Id.'">';
                                $task_html .= '<a href="#" rel="noopener noreferrer">'.$task->task.'</a>';
                                $task_html .= '</div>';
                                $task_html .= '<div class="task-actions flex-shrink-1">
                                                        <span class="edit"><a href="edit/'.$task->Id.'"><i class="fas fa-edit"></i></a></span>
                                                        <span class="done"><i class="fas fa-check-circle"></i></span>
                                                        <span class="remove"><a href="delete/'.$task->Id.'"><i class="far fa-times-circle"></i></a></span>
                                                </div>';
                                $task_html .= '</li>';

                                echo $task_html;
                            }

                        ?>


                        
        

                    </ul>
                </div>
            
           

                </div>
            
            </div><!-- .todo-app -->

        </div><!-- .row -->
    </div><!-- .container -->

</body>
</html>