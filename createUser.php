<?php
include 'conn.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    
    $sql="insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data inserted successfully";
    }
    else{
       die(mysqli_error($conn));
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="container my-5">
        <button type=" Add users" class="btn btn-primary" > Add Users</button>
        <form method="post">
            <div class=" form-group">
                <label>name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name"><br>
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter your email"><br>
            </div>
            <div class="form-group">
                <label>mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile"><br>
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="text" class="form-control" name="password" placeholder="Enter your password"><br>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">submit</button>
        </form>
    </div>

    
</body>
</html>