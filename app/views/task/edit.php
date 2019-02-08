<?php

echo 'nigga';
    var_dump($_POST);

    $task = $_POST['task'];

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
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    
    <div class="container">
        <div class="row">

            <div class="todo-app offset-md-3 col-md-6">

                <div class="card">
                    <div class="card-header">
                        <a href="../task">Todo App</a>
                    </div>

                    <form action="" method="post">
                        <div class="todo-tasks form-group list-group list-group-flush">
                            
                            <div class="lead-text list-group-item">Edit Task:</div>
                            <div class="edit-task list-group-item">
                                <input class="form-control" type="text" name="task" value=" <?php echo $task; ?>">
                            </div>
                            <div class="list-group-item">
                                <input  type="submit" value="Submit Edit" class="btn btn-primary"/>
                            
                            </div>                                            
            
                        </div>
                    </form>

                </div>
            
           

                </div>
            
            </div><!-- .todo-app -->

        </div><!-- .row -->
    </div><!-- .container -->

</body>
</html>