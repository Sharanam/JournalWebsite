<?php
    include("database.php");
    
        $email = $_POST["Email"];
        $full_name = $_POST["FullName"];
        $password = md5($_POST["Password"]);
        $dob = $_POST["DOB"];
        $gender = $_POST["gender"];
        $short_gender = "";
        
        if($gender == "Male"){
            $short_gender = "M";
        }
        else if($gender == "Female"){
            $short_gender = "F";
        }
        else if($gender == "Other"){
            $short_gender = "O";
        }
        
        $sql=mysqli_query($conn,"SELECT * FROM author where emailID='$email'");
        if(mysqli_num_rows($sql)>0)
        {
            echo "Email Id Already Exists"; 
            exit;
        }
        else{
         
          $query="INSERT INTO author(emailID, password, full_name, dob, gender ) VALUES ('$email', '$password','$full_name', '$dob', '$short_gender')";
          $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
          header ("Location: login.php?status=success");  
        }
    
?>