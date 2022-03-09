<?php

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Admin Panel</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <h1 class="text-center"> FitnessDB- RECORDS</h1>
            <hr style="height: 1px;color: black;background-color: black;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <h2>Abs Data</h2>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>VideoLink</th>
                    <th>excrise</th>
                    <th>Calories</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php

                include '../lib/model.php';
                $model = new Model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){

                    foreach($rows as $row){
                        ?>

                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['Videolink']; ?></td>
                            <td><?php echo $row['exercise']; ?></td>
                            <td><?php echo $row['calories']; ?></td>
                            <td>
                                <a href="read.php?id=<?php echo $row['id']; ?>" class="badge badge-info">Read</a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="badge badge-success">Edit</a>
                            </td>
                        </tr>

                        <?php
                    }
                }else{
                    echo "no data";
                }

                ?>

                </tbody>
            </table>
        </div>
    </div>
    <h2>Arms Data</h2>
    <!----Arms  DATA  ----->
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>VideoLink</th>
                    <th>excrise</th>
                    <th>Calories</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php


                $Arm_model = new Model();
                $rows = $Arm_model->fetchArms();
                $i = 1;
                if(!empty($rows)){

                    foreach($rows as $row){
                        ?>

                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['Videolink']; ?></td>
                            <td><?php echo $row['exercise']; ?></td>
                            <td><?php echo $row['calories']; ?></td>
                            <td>
                                <a href="read.php?id=<?php echo $row['id']; ?>" class="badge badge-info">Read</a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="badge badge-success">Edit</a>
                            </td>
                        </tr>

                        <?php
                    }
                }else{
                    echo "no data";
                }

                ?>

                </tbody>
            </table>
        </div>
    </div>

    <h2>Chest Data</h2>
    <!----Chest  DATA  ----->
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>VideoLink</th>
                    <th>excrise</th>
                    <th>Calories</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php


                $Chest_model = new Model();
                $rows = $Chest_model->fetchChest();
                $i = 1;
                if(!empty($rows)){

                    foreach($rows as $row){
                        ?>

                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['Videolink']; ?></td>
                            <td><?php echo $row['exercise']; ?></td>
                            <td><?php echo $row['calories']; ?></td>
                            <td>
                                <a href="read.php?id=<?php echo $row['id']; ?>" class="badge badge-info">Read</a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="badge badge-success">Edit</a>
                            </td>
                        </tr>

                        <?php
                    }
                }else{
                    echo "no data";
                }

                ?>

                </tbody>
            </table>
        </div>
    </div>

    <h2>Legs Data</h2>
    <!----Legs  DATA  ----->
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>VideoLink</th>
                    <th>excrise</th>
                    <th>Calories</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php


                $Legs_model = new Model();
                $rows = $Legs_model->fetchLegs();
                $i = 1;
                if(!empty($rows)){

                    foreach($rows as $row){
                        ?>

                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['Videolink']; ?></td>
                            <td><?php echo $row['exercise']; ?></td>
                            <td><?php echo $row['calories']; ?></td>
                            <td>
                                <a href="read.php?id=<?php echo $row['id']; ?>" class="badge badge-info">Read</a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="badge badge-success">Edit</a>
                            </td>
                        </tr>

                        <?php
                    }
                }else{
                    echo "no data";
                }

                ?>

                </tbody>
            </table>
        </div>
    </div>









</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
