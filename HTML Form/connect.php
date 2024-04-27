<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $DOB = $_POST['DOB'];
    $NIC = $_POST['NIC'];
    $Address = $_POST['Address'];
    $City = $_POST['City']; 
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $School_Name = $_POST['School_Name'];
    $Blood_Group = $_POST['Blood_Group'];
    $Number = $_POST['Number'];
    $Email = $_POST['Email'];
    $Achievement = $_POST['Achievement'];
    $Type = $_POST['Type'];
    $Medical = $_POST['Medical'];




$con = new mysqli('localhost','root','','Cricket_Club');

    if($con){
        //echo "Connection Successful";
        $sql="insert into user(First_Name,Last_Name,DOB,NIC,Gender)values('$First_Name','$Last_Name','$DOB','$NIC','$Gender')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($con));

        }
    }
    else{
        die(mysqli_error($con));
    }

    if($con){
        //echo "Connection Successful";
        $sql="insert into school(NIC,School_Name,Email)values('$NIC','$School_Name','$Email')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($con));

        }
    }
    else{
        die(mysqli_error($con));
    }

    if($con){
        //echo "Connection Successful";
        $sql="insert into personal_details(NIC,Address,Age,Number,City)values('$NIC','$Address','$Age','$Number','$City')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($con));

        }
    }
    else{
        die(mysqli_error($con));
    }

    if($con){
        //echo "Connection Successful";
        $sql="insert into medical(NIC,Medical,Blood_Group)values('$NIC','$Medical','$Blood_Group')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($con));

        }
    }
    else{
        die(mysqli_error($con));
    }

    if($con){
        //echo "Connection Successful";
        $sql="insert into category(NIC,Achievement,Type)values('$NIC','$Achievement','$Type')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            die(mysqli_error($con));

        }
    }
    else{
        die(mysqli_error($con));
    }


}
?>