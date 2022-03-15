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
           <div class="col-7"></div>
           <div class="col-5">
               <div class="card">
                    <div class="card-body">
                        <h5>your valuable Feedback Here</h5>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">contact <span class="text-danger">*</span></label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Message <span class="text-danger">*</span></label>
                                <textarea row="10" name="msg" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="send" value="Send" class="btn btn-primary float-end">
                            </div>
                        </form>
                        <?php 
                        if(isset($_POST['send'])){
                            $name = $_POST['name'];
                            $msg = $_POST['msg'];
                            $contact = $_POST['contact'];
                            
                            $query = mysqli_query($connect, "insert into feedbacks (feed_by,msg,contact) value('$name','$msg','$contact')");
                            if($query){
                                redirect();
                            }
                        }
                        ?>
                    </div>
               </div>
           </div>
       </div>
   </div>
   


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>