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

    <div class="container mt-3">
        <div class="row">
            <div class="col-7"> 
                <div class="card border border-primary">
                    <div class="card-header bg-primary text-white">Latest Projects</div>
                    <div class="card-body py-0 px-1">
                        <table class="table mb-0 table-sm small table-hover">
                        <?php 
                            $callingProject = mysqli_query($connect,"select * from projects JOIN categories ON projects.category_id=categories.cat_id where status='1' order by projects.pro_id DESC");
                            $count = 1;
                            while($row = mysqli_fetch_array($callingProject)){
                        ?>
                        <tr>
                            <td><?= date("d-M-Y",strtotime($row['doc']));?></td>
                            <td><a href="viewProjects.php?pro_id=<?= $row['pro_id'];?>" class="nav-link m-0 p-0 d-inline"><?= $row['pro_title'];?></a> 
                            <?php if($count == 1): ?>
                                <span class="badge bg-danger text-white small">New</span>
                            <?php endif; ?>
                        </td>
                            <td><?= $row['cat_title'];?></td>
                        </tr>
                       <?php $count++; } ?>
                    </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
   


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>