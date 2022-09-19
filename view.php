<?php include 'insert.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>crud</title>
</head>
<body>
<form action="">
        
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Files</th>
                    
                </tr>
            </thead>
            <?php
            include 'conn.php';

            $query = "SELECT * FROM crudtable";
            $result = mysqli_query($conn,$query);
   
            // print_r($result);die;
            while($res = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                // print_r($res);die;

                
                ?>
                <tbody>
                    <tr>
        <td><?php echo $res['Id'];?></td>
        <td><?php echo $res['Name']; ?></td>
        <td><?php echo $res['Email']; ?></td>
        <td><?php echo $res['Contact']; ?></td>
        <td><a href="update.php?id=<?php echo $res['Id']; ?>"><input type="button" class="btn btn-success" value="Update"></a>
       <a href="delete.php?id=<?php echo $res['Id'];?>"><input type="button" class="btn btn-danger" value="Delete"></a></td>
        <td><a href="view.php?file_id=<?php echo $res['Id'];?>"><?php echo $res['files'];?></a></td>
    
    </tr>
</tbody>

<?php } ?>
</table>
                    </form>

                    </body>
                    </html>