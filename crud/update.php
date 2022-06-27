<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>update</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
        <h1 class="lead">Add User</h1>    
    <form method="post">
       <label>Name</label>
       <input type="text" name= "first_name"  class="form-control" >
       <label>Last_Name</label>
       <input type="text" name= "last_name" class="form-control" >
       <label>phone_no</label>
       <input type="number" name= "phone_no" class="form-control" > 
    <br>
        <button class="btn-secondary" type="submit" name="Update">update</button>   
    </form>
    <br>
    <div class="row1">
        <button class="btn-danger"><a href="index.php" class = "text-light"style="text-decoration:none;">Back</a></button>
        </div>
        </div>
        <div class="col-sm-2"></div>
        </div>

        
    </div>
    
  
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>