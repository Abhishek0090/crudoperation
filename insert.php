    <?php
            include 'conn.php';
            
            if(count($_POST)!=0){
                extract($_POST); //used for extracting values
                // print_r($_POST);die; 
                $query = "INSERT INTO crudtable(name,email,contact) VALUES ('$name','$email','$contact')";
                $result = mysqli_query($conn,$query);
                // if($result==true){
                //     echo "Data Inserted Successfully";

                // }
                // else{
                //     echo "Something went wrong";
                // }
            }
            
            
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
    
<h5 class="text-center"><a href="view.php"><input type="button" class="btn btn-primary" value="View Data"></a></h5>
</div>
</div>
</div>

</body>
</html>