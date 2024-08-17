<?php      
    include('connect1.php');  
    $b= $_POST['email'];  
    $c= $_POST['password'];  
      
      
        $b = stripcslashes($b);  
        $c = stripcslashes($c);  
        $b= mysqli_real_escape_string($con, $b);  
        $c = mysqli_real_escape_string($con, $c);  
      
        $sql = "select * from login1 where e = '$b' and p = '$c'";  
        $result = mysqli_query($con, $sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
          
        if($count == 0){
            header("location: task3.html");
              
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  