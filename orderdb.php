<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <div class="header">
       
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
// collect value of input field
          $RegNo=$_POST['Reg_Id'];
          
          $SM140=$_POST['SM140'];
          $SM500=$_POST['SM500'];
          $FCM500=$_POST['FCM500'];
          $SM1L=$_POST['SM1L'];
          $FCM1L=$_POST['FCM1L'];
          $C140=$_POST['C140'];
          $C500=$_POST['C500'];
          $CUP100=$_POST['CUP100'];
          $CUP200=$_POST['CUP200'];
          $BTMILK=$_POST['BTMILK'];

          $Pro=array(
            "SM140"=> $SM140,
            "SM500"=> $SM500,
            "FCM500"=>$FCM500,
            "SM1L"=> $SM1L,
            "FCM1L"=>$FCM1L,
            "C140"=> $C140,
            "C500"=> $C500,
            "CUP100"=>$CUP100,
            "CUP200"=>$CUP200,
            "BTMILK"=>$BTMILK
          );
            $Product=json_encode($Pro);       
      }

      ?>
        
        </div>
            <div class="login-form">
                <?php
                    $server_name='localhost';
                    $username='admin';
                    $password='bsccsbhc';
                    $database_name='orderlist';
                    $conn=mysqli_connect($server_name,$username,$password,$database_name);
// Check connection
                        if ($conn->connect_error)
                            {
                            die("Connection failed: " . $conn->connect_error);
                            }

                    
                    $sql = "INSERT INTO orders"."(Reg_Id, Product)".
                    "VALUES"." ('$RegNo','$Product)";
                    
                    if ($conn->query($sql) === TRUE) {
                        echo "Order Placed successful";
                    } else {
                        echo "Error occur pls try again";
                    }
                    
                    $conn->close();
                ?>
                
<!--form for back button -->
            <form action='index.php'>
            <div id="2" class="action" >
                    <button type='submit'>Back</button>
            </div>
            </form>
            </div>


            
    </div>
    </body>
    </html>