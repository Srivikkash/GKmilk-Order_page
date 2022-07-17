<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <div class="header">
       
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") 
                {
// collect value of input field
                    $name = $_POST['uname'];
                    $pno = $_POST['pNO'];
                    $area =$_POST['Area'];
                    if ($name==true) {
                        echo ("Welcome ".$name)
                    }
                }
                ?>
        
        </div>
            <div class="login-form">
                <?php
//connectiong server
                $server_name='localhost';
                $username='admin';
                $password='bsccsbhc';
                $database_name='orderlist';
                $conn=mysqli_connect($server_name,$username,$password,$database_name);

// Check connection
                    if ($conn->connect_error)
                        {
                        die("Connection failed: "
                            . $conn->connect_error);
                        }

//collect Sno and R_no from user_login database.

            $result=mysqli_query($conn,"SELECT * FROM users_login");
            $row= mysqli_num_rows($result);

            $Sno=$row +1;
            $r_no="GKM_".$Sno;

//insert the new user details.
            $sql = "INSERT INTO users_login (S_no,Reg_Id,fname, Ph_no, Area) VALUES ($Sno,'$r_no','$name', '$pno', '$area')";

//check the insertion state.   
                    if ($conn->query($sql) === TRUE) {
                        echo "Registration Successful";
                    } else {
                        echo "Error occur pls try again";
                    }

//close database connecion.   
                    $conn->close();
                ?>
<!--form for back button -->
                 <form action='index.html'> 
            <div id="2" class="action" >
                    <button type='submit'>Back</button>
            </div>
            </form>
            </div>
   
</div>
</body>
</html>