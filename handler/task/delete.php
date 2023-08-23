<?php
session_start();

require "../../dbBroker.php";
require "../../model/task.php";

if(isset($_POST['id'])){
        $id = mysqli_real_escape_string($conn, $_POST['id']);

        $status = Task::deleteById($id, $conn);
        if ($status){
            $_SESSION['message'] = "Task removed successfully";
            header("Location: ../../project-view-task.php?id=".$_POST['project_id']);
            exit(0);
        }else{
            $_SESSION['message'] = "Task is not removed";
            header("Location: ../../index.php");
            exit(0);
        }
    }

?>