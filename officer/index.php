<?php include "../include/dbConfig.php";

authCheck('admin','login');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Officer Panel - Zila Vikash Manch</title>
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
                <div class="row g-2">
                    <div class="col-3">
                        <div class="card bg-success text-white shadow">
                            <div class="card-body">
                                <h1 class="display-3">50+</h1>
                                <p class="small">Total Completed Project</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card bg-danger text-white shadow">
                            <div class="card-body">
                                <h1 class="display-3">50+</h1>
                                <p class="small">Total Open Project</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card bg-info text-white shadow">
                            <div class="card-body">
                                <h1 class="display-3">50+</h1>
                                <p class="small">Total Register Institute</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card bg-warning text-white shadow">
                            <div class="card-body">
                                <h1 class="display-3">50+</h1>
                                <p class="small">Total Register Candidate</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header bg-seondary">Lastest Project</div>
                            <div class="card-body p-1">
                                <table class="table table-sm">
                                    <tr>
                                        <td>P.id</td>
                                        <td>Title</td>
                                        <td>Status</td>
                                        <td>Date</td>
                                    </tr>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header bg-seondary">Lastest Event/Notification</div>
                            <div class="card-body p-1">
                                <table class="table table-sm">
                                    <tr>
                                        <td>Title</td>
                                        <td>Date</td>
                                    </tr>
    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>