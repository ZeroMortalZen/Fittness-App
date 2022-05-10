<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Fittness Records</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <h1 class="text-center">FitnessDB - EDIT RECORD</h1>
            <hr style="height: 1px;color: black;background-color: black;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <?php

            include '../lib/model.php';
            $model = new Model();
            $id = $_REQUEST['id'];
            $row = $model->edit($id);

            if (isset($_POST['update'])) {

                if (isset($_POST['Videolink']) && isset($_POST['exercise']) && isset($_POST['calories'])) {
                    echo "isset woring";
                    if (!empty($_POST['Videolink']) && !empty($_POST['exercise']) && !empty($_POST['calories']) ) {
                        echo "workinh";
                        $data['id'] = $id;
                        $data['Videolink'] = $_POST['Videolink'];
                        $data['exercise'] = $_POST['exercise'];
                        $data['calories'] = $_POST['calories'];

                        if($id>=1 && $id <=7){
                            $update = $model->updateAbs($data);
                        }
                        elseif ($id>=7 && $id<=12){
                            $update = $model->updateArms($data);
                        }
                        elseif ($id>=13 && $id<=18){
                            $update = $model->updateChest($data);
                        }
                        else{
                            $update = $model->updateLegs($data);
                        }


                        if($update){
                            echo "<script>alert('record update successfully');</script>";
                            echo "<script>window.location.href = '../pages/AdminPanel.php';</script>";
                        }else{
                            echo "<script>alert('record update failed');</script>";
                            echo "<script>window.location.href = '../pages/AdminPanel.php';</script>";
                        }

                    }else{
                        echo "<script>alert('empty');</script>";
                        header("Location: edit.php?id=$id");
                    }
                }
                else{
                    var_dump(isset($_POST['Videolink']));
                }
            }

            ?>
            <form method="post">
                <div class="form-group">
                    <label for="">Videolink</label>
                    <input type="text" name="Videolink" value="<?php echo $row['Videolink'];?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Exercise</label>
                    <input type="text" name="exercise" value="<?php echo $row['exercise'];?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Calories</label>
                    <input type="text" name="calories" value="<?php echo $row['calories'];?>" class="form-control">
                </div>


                <div class="form-group">
                    <button type="submit" name="update" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
