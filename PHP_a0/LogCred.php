<?php

require('PDB.php');
session_start();

if(isset($_POST['submit'])){

        $user=$_POST['u_name'];
        $pass=$_POST['u_pass'];

        $q2= "select * from accounts where user_name='$user' and password='$pass'";
        $row= $connect_db->query($q2);
        $result= $row->fetch_assoc();

        if($result!=null){
            $_SESSION['user']= $user;
            header("location:Home.php");
        };
}
?>