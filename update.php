<?php
            include 'conn.php';
            
            if(count($_POST)!=0 && isset($_POST['save'])){
                extract($_POST); //used for extracting values 
                extract($_GET); //used for retriving values

                        
           // name of the uploaded file
    $filename = $_FILES['myfile']['name'];
    // print_r($filename);die;

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','png'])) {
        echo "You file extension must be .zip, .pdf or .docx .png";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            // $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            $query = "UPDATE  crudtable SET name= '$name',email='$email',contact = '$contact' , files='$filename' WHERE id='$id'";
            $result = mysqli_query($conn,$query);
            if (mysqli_query($conn, $result)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
                // if($result==true){
                //     echo "Data Inserted Successfully";

                // }
                // else{
                //     echo "Something went wrong";
                // }


               
            
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
                    <form action="" method="post" enctype = "multipart/form-data">
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
            <input type="file" name="myfile"><br>
            <button type="submit" class="btn btn-success" name="save">Upload</button>
           
        </div>
    </form>
<h5><a href="view.php"><input type="button" class="btn btn-primary" value="View Data"></a></h5>
</div>
</div>
</div>
</body>
</html>