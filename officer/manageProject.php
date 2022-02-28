<?php include "../include/dbConfig.php";

authCheck('admin','login');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Projects | Officer Panel - Zila Vikash Manch</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body class="bg=light">
    <?php include "../include/navbar.php";?>
    
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-2 bg-dark" style="height:91.5vh">
               <?php include "../include/side.php";?>
            </div>
            <div class="col-10 p-4">
               <div class="row">
                   <div class="col-8">
                       <h1 class="h5 fs-bolder">Manage Projects/Problems</h1>
                   </div>
                   <div class="col-4">
                       <a href="" class="btn btn-success float-end">Publish Project</a>
                   </div>
               </div>
               <table class="table mt-3">
                   <tr>
                       <th>#id</th>
                       <th>Title</th>
                       <th>Category</th>
                       <th>Description</th>
                       <th>Status</th>
                       <th>Date</th>
                       <th>Action</th>
                   </tr>
                   <tr>
                       <!-- demo data -->
                       <td>PS01</td>
                       <td>Green Corridor</td>
                       <td>Transports</td>
                       <td>Lorem ipsum dolor sit amet consec</td>
                       <td>
                           <span class="badge bg-success text-white">
                               Open
                           </span>
                           <span class="badge bg-dark text-white">
                               Closed
                           </span>
                       </td>
                       <td>13 July 2022</td>
                       <td>
                           <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown">Action</button>
                                <div class="dropdown-menu">
                                    <a href="" class="dropdown-item">link 1</a>
                                    <a href="" class="dropdown-item">link 2</a>
                                    <a href="" class="dropdown-item">link 3</a>
                                    <a href="" class="dropdown-item">link 4</a>
                                    <a href="" class="dropdown-item">link 5</a>
                                </div>
                           </div>
                       </td>
                   </tr>
               </table>
            </div>
        </div>
    </div>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>