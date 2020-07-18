<?php
    require ("PDB.php");
    session_start();
    if(isset($_POST['submit'])){
     echo $_POST['u_name'];
     $user=$_POST['u_name'];
     $pass=$_POST['u_pass'];
     $id='';

    $qu= "INSERT INTO accounts VALUES('$id','$user','$pass')";
    $add= mysqli_query($connect_db,$qu);
    if($add){
        $_SESSION['user']=$user;
        echo "<script type='text/javascript'>alert('Your Account Has Been Created Successfully!');window.location.href='Home.php'</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('Username Already Exists!');window.location.href='SignUp.php'</script>";
    }
}
?>