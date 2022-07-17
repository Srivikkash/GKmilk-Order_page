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
       
        </div>
            <div>
                <?php
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
                ?>
            </div>
<!-- Form to display the product order details-->
            <div class='login-form'>
                <?php
//collecting datas from orderdb.
                    $sql = "SELECT * FROM orders";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
// output data of each row.
                        while($row = $result->fetch_assoc()) {
                            echo "S_no: " . $row["S_no"]. " Name: " . $row["fname"]. "Phone_Number:" .$row["Ph_no"] . "Submit_Date:" .$row["sub_date"]. "Products:" .$row["Product"] . "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
//close db connection.
                    $conn->close();
                    ?>
            </div>

<!--form for back button -->
            <form action='index.html'>
            <div id="2" class="action" >
                    <button type='submit'>Back</button>
            </div>
            </form>

    </div>
    </body>
    </html>