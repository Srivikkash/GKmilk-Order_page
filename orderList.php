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
            <pre><h1>HAP  DAILY</h1></pre> THAMMAMPATTY

        </div>

        <form method='post' action='orderdb.php'>
            <br>
            <br>
            <h1>Orders</h1>
            <br>
                <div class="content">
                  <h4>  <?php
// collect value of input field

if($_GET){
    $RegNo= $_GET['Reg_Id']; // print_r($_GET); //remember to add semicolon      
    echo $RegNo;

}else{
  echo "Url has no user";
}
?></h4>
<br>

                <input type='hidden' name='Reg_Id' value="<?=$RegNo?>">
                <div id="001" class="input-field">
                <h5>SM 140ML</h5>
                    <input type="number" name='SM140' value=0>
                </div>

                <div id="002" class="input-field">
                    <h5>SM 500ML</h5>
                    <input type="number" name='SM500'  value=0>
                </div>

                <div id="003" class="input-field">
                    <h5>FCM 500ML</h5>
                    <input type="number" name='FCM500'  value=0>
                </div>
                
                <div id="004" class="input-field">
                    <h5>SM 1L</h5>
                    <input type="number" name='SM1L' value=0>
                </div>
                
                <div id="005" class="input-field">
                    <h5>FCM 1L</h5>
                    <input type="number" name='FCM1L' value=0>
                </div>
                
                <div id="006" class="input-field">
                    <h5>CURD 140</h5>
                    <input type="number" name='C140' value=0>
                </div>
                
                <div id="007" class="input-field">
                    <h5>CURD 500</h5>
                    <input type="number" name='C500' value=0>
                </div>
                
                <div id="008" class="input-field">
                    <h5>CUP 100</h5>
                    <input type="number" name='CUP100' value=0>
                </div>

                <div id="009" class="input-field">
                    <h5>CUP 200</h5>
                    <input type="number" name='CUP200' value=0>
                </div>

                <div id="010" class="input-field">
                    <h5>BUTTER MILK</h5>
                    <input type="number" name='BTMILK' value=0>
                </div>
            </div>
            <div id="011" class="action">
            <button>Submit</button>
            </div>
                
        </form>
<!--form for back button -->

            <form action='index.html'>
            <div id="2" class="action" >
                    <button type='submit'>Back</button>
            </div>
            </form>

    </div>
    </body>
    </html>