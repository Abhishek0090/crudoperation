<?php
            include 'conn.php';
            
            if(count($_POST)!=0){
                extract($_POST); //used for extracting values 
                extract($_GET); //used for retriving values
                $query = "UPDATE crudtable SET name= '$name',email='$email',contact = '$contact' WHERE id='$id'";
                $result = mysqli_query($conn,$query);
                if($result==true){
                    echo "Data Inserted Successfully";

                }
                else{
                    echo "Something went wrong";
                }
            }
            
            
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <form action="" method="post">
                    <div class="card m-4">
                        <div class="card-header">
                            <h1 class="text-center">Insert Data</h1>
                            
                        </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
            </div>
            
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your Contact">
            </div>
            <button type="submit" class="btn btn-success">
                Submit
            </button>
        </div>
    </form>
<h5><a href="view.php"><input type="button" class="btn btn-primary" value="View Data"></a></h5>
</div>
</div>
</div>
</body>
</html>