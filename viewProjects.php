<?php include "include/dbConfig.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zila Vikash Manch - District Development Portal - Purnea</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <?php include "header.php";?>
    <!--you can add banner here  -->
    <?php 
        $pro_id = $_GET['pro_id'];
        $callingProject = mysqli_query($connect,"select * from projects JOIN categories ON projects.category_id=categories.cat_id where pro_id='$pro_id'");
        $row = mysqli_fetch_array($callingProject);
    ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-7"> 
                <div class="card border border-primary">
                    <div class="card-body">
                    <h2 class='text-capitalize'><?= $row['pro_title'];?> </h2>
                    <div class="card-body py-0 px-1">
                       
                        <p>Date: <?= date("d-M-Y",strtotime($row['doc']));?></p>
                        <p class='text-muted'>Category: <?= $row['cat_title'];?></p>
                        <p class="lead"><?= $row['description'];?></p>
                    </div>
                    </div>
                   
                </div>
                <?php 
                if(!isset($_SESSION['user'])): ?>
                    <a href="login.php?next=viewProjects.php?pro_id=<?= $_GET['pro_id'];?>" class="btn btn-warning mt-5">Signin to Submit your Project</a>

                <?php else: ?>

                    <a href="#submitform" class="btn btn-success mt-5" data-bs-toggle="collapse">Submit your Project</a>


                    <div class="collapse fadeIn" id="submitform">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="">Submit your Form</h2>
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="">Content</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" name="Submit" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-5">
                <div class="card">
                    <img src="image/project/<?= $row['image'];?>" alt="" class="card-img-top">
                </div>
            </div>
        </div>
    </div>
   


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>