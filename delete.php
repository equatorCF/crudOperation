<?php
   include "conn.php";
   if(isset($_GET['deleteid'])){
    $SerialNo=$_GET['deleteid'];

    $sql="delete from `crud` where SerialNo=$SerialNo";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:display.php');
    }
    else{
        die(mysqli_error($conn));
    }





   }

?>