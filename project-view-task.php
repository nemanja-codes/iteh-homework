<?php
session_start();
require "dbBroker.php";
require "model/project.php";

$result = Project::findAll($conn);

if (!$result) {
    echo "Error!";
    die();
}
if ($result->num_rows==0) {
    echo "No projects to display";
} else {

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>


  <body>

    <div class="container mt-5">

        <div class="row">
            <div class="column-md-12">
                <div class="card">
                    <div class="card-header">
                         <h4>Project details
                            <a href="project-create.php" class="btn btn-primary float-end"> Create project </a>
                         </h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                while($row = $result->fetch_array()) :
                                ?>
                                <tr>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["description"]; ?></td>
                                    <td>
                                        <a href="project-view-tasks.php?id=<?=$row['id']; ?>" class="btn btn-info btn-sm">Tasks</a>
                                        <a href="project-update.php?id=<?= $row['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>

                                </tr>
                            <?php 
                            endwhile;
                            } //end of else
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>