<?php include "config.php";?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>crud application</title>
<style>
    body{
        
        text-decoration:none;
        margin:0px;
        padding:0px;
        list-style: none;
    }
</style>  
</head>
  <body>
    <div class="container">
    <!-- <button class="btn-primary text-light"style="text-decoration:none;"><a href="add_user.php"></a>Add User</button> -->
    <button class="btn-primary"><a href="add_user.php" class = "text-light"style="text-decoration:none;">add user</a></button>
    <!-- <a href="add_user.php">Add User</a></button> -->
       
    <div class="row" style="margin:auto; height:auto">
        <!-- <div class="col-sm-2"></div> -->
        <div class="col-sm-12  border border-3">
        
        <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>last_name</td>
                <td>phone_number</td>
                <td>Update</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn,$sql);
        ?>
        <?php
            while ($row = mysqli_fetch_array($result)) {
                ?>
            <tr>
                <td><?php echo $row['user_id'] ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['phone_no'] ?></td>  
                <td><a href="update.php?updateid= <?php echo $row['user_id']?> "><input type="submit" name="update" value="update"></a></td>  
                <td><a href="delete.php?deleteid= <?php echo $row['user_id']?>"><input type="submit" name="delete" value="delete"></a></td>  
                  
                
            
              
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>

        </div>
        <!-- <div class="col-sm-2"></div> -->
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>