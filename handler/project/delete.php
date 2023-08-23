<?php
session_start();

require "../../dbBroker.php";
require "../../model/project.php";

if(isset($_POST['id'])){
        $id = mysqli_real_escape_string($conn, $_POST['id']);

        $status = Project::deleteById($id, $conn);
        if ($status){
            $_SESSION['message'] = "Project removed successfully";
            header("Location: ../../index.php");
            exit(0);
        }else{
            $_SESSION['message'] = "Project is not removed";
            header("Location: ../../index.php");
            exit(0);
        }
    }

?>