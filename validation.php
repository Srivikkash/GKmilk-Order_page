<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN_PAGE</title>
</head>
<body>

<div >
    <div class="header">
    <pre><h1>HAP  DAILY</h1></pre> THAMMAMPATTY
    </div>
        
    <div class="boxing">

<div class="login-form">
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
// collect value of input field.
        $name = $_POST['uname'];
        $pno = $_POST['pNO'];
        $area =$_POST['Area'];
        
//connectiong server.
        $server_name='localhost';
        $username='admin';
        $password='bsccsbhc';
        $database_name='orderlist';
        $conn=mysqli_connect($server_name,$username,$password,$database_name);

// Check connection.
            if ($conn->connect_error)
                {
                die("Connection failed: "
                    . $conn->connect_error);
                }
        
//validate user existance.
        $sql="SELECT Reg_Id from users_login where fname='$name' and Ph_no='$pno'";
        $result=mysqli_query($conn,$sql) or die(mysqli_error());
        $reg = mysqli_fetch_array($result);
        $numrows = mysqli_num_rows($result);
        if($numrows > 0)
            {
//user exist got to check function.
                check($name,$pno,$reg);
            }
        else
        {   
//user not exist go back to index page.
            echo("Username/ password not matched redirected to login page in 3 seconds");
            header("Refresh: 3;url= index.html"); 
        }
        
    }

//check weather the user is an admin user or a regular user.       
function check($name,$pno,$reg){
    $regno=(string)$reg[0];
    if ($name=="G.K.milk" and $pno=="9787577142") 
    {
//user is an admin user redirect to Admin page.
        header("location: Admin.php");
        exit();
    }
    else
    {
//user is a regular user redirect to orderList page.
        header("location: orderList.php?Reg_Id=".$regno);
        exit();
    }
}
?>
</div>
</div>
</div>
</body>
</html>