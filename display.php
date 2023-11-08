<?php
   include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operations</title>
</head>
<body>
    <button class="btn btn-primary" style="color: white;background-color:aqua; gap:50px; margin: top 20px;"><a href="createUser.php">Add Users</a></button>
    <table border="">
        <tr>
            <th scope="col">SerialNo</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">mobile</th>
            <th scope="col">password</th>
            <th scope="col">Actions</th>
        </tr>
        
        <tr>

           <?php
               $sql="SELECT * FROM `crud`";
               $result=mysqli_query($conn,$sql);
               if($result){
                    while($row=mysqli_fetch_assoc($result)){
                       $SerialNo=$row['SerialNo'];
                       $Name=$row['Name'];
                       $Email=$row['Email'];
                       $Mobile=$row['Mobile'];
                       $Password=$row['Password'];

                       echo '<tr>
                       <th scope="row">'.$SerialNo.'</th> 
                       <td>'.$Name.'</td>
                       <td>'.$Email.'</td>
                       <td>'.$Mobile.'</td>
                       <td>'.$Password.'</td>
                       <td>
                       <button style="background-color: aqua;"><a href="update.php? updateid='.$SerialNo.'">Update</a></button>
                       <button style="background-color: red; font-weight: white;"><a href="delete.php? deleteid='.$SerialNo.'">Delete</a></button>
                       
                       </td>
                       </tr>';
                    }
                }
            ?>
           
        </tr>

    </table>
</body>
</html>