<?php include "include/dbConfig.php";

if(isset($_GET['next'])){
    $_SESSION['next'] = $_GET['next'];
}

?>
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

    <div class="container mt-4">
        <div class="row">
           <div class="col-5 mx-auto">
          
                 <div class="row mb-3">
                   <div class="col-6">
                       <div class="card bg-success text-white">
                           <div class="card-body">
                               <h5 class="text-center h3 mb-0"><i class="bi bi-building"></i></h5>
                                <a href="registerInstitute.php" class="stretched-link nav-link m-0  text-white text-center p-0">Register As Institute</a>
                           </div>   
                       </div>
                   </div>
                   <div class="col-6">
                       <div class="card bg-dark text-white">
                           <div class="card-body">
                           <h5 class="text-center h3 mb-0"><i class="bi bi-person"></i></h5>
                                <a href="register.php" class="stretched-link nav-link m-0 text-white text-center  p-0">Register As Candidate</a>
                           </div>   
                       </div>
                   </div>
               </div>

               <div class="card">
                   <div class="card-header">Register Here as Institute</div>
                   <div class="card-body">
                       <form action="" method="post">
                           <div class="mb-2">
                               <div class="form-floating">
                                   <input type="text" placeholder="name" name="name" class="form-control">
                                   <label for="">Name</label>
                               </div>
                           </div>
                           <div class="mb-2">
                               <div class="form-floating">
                                   <input type="text" placeholder="email" name="email" class="form-control">
                                   <label for="">Email</label>
                               </div>
                           </div>
                           <div class="mb-2">
                               <div class="form-floating">
                                   <input type="text" placeholder="contact" name="contact" class="form-control">
                                   <label for="">Contact</label>
                               </div>
                           </div>
                           <div class="mb-2">
                               <div class="form-floating">
                                   <input type="text" placeholder="est_year" name="est_year" class="form-control">
                                   <label for="">Establish Year</label>
                               </div>
                           </div>
                           <div class="mb-2">
                               <div class="form-floating">
                                   <input type="text" placeholder="board name" name="board_name" class="form-control">
                                   <label for="">Board Name</label>
                               </div>
                           </div>
                           <div class="mb-2">
                               <div class="form-floating">
                                   <input type="password" placeholder="password" name="password" class="form-control">
                                   <label for="">Password</label>
                               </div>
                           </div>
                           <div class="mb-2">
                                   <input type="submit" name="create" class="btn btn-primary w-100" value="Login">
                           </div>
                       </form>
                       <?php
                           if (isset($_POST['create'])) {
                               $name=$_POST['name'];
                               $email=$_POST['email'];
                               $contact=$_POST['contact'];
                               $password= sha1($_POST['password']);
                               $est_year = $_POST['est_year'];
                               $board_name = $_POST['board_name'];
                               $type = 1;

                               $query=mysqli_query($connect,"insert into accounts (name,email,contact,password,est_year,board_name,type) value ('$name','$email','$contact','$password','$est_year','$board_name','$type')");
                               
                               if ($query) {
                                if(isset($_SESSION['next'])){
                                    $_SESSION['user'] = $email;
                                    echo "<script>window.open('".$_SESSION['next']."','_self')</script>"; 
                                }
                                   redirect('login');
                               }

                           }
                       ?>
                   </div>
                   <div class="card-footer">
                       <a href="login.php" class="nav-link float-start p-0 m-0 small text-muted">Already Registered User?</a>
                   </div>
               </div>
           </div>
        </div> 
    </div>
   


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>