<?php 
// session_start();
include '../../repeat/activity.php';
    $_SESSION['#imagePath'] = '../../includes/btc.png';
    $_SESSION['#logoutPath'] = '../logout.php';
    $_SESSION['#menuPath'] = '../';
// print_r($_SESSION);
?>

<html>
<head>
    <title>Wallet</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<table border="0" width=100%>
        <tr height="100px">
            <th width=20%>
                <a href="../user/home.php">
                    <img src='../../../includes/btc.png'  alt="logo" width="200px">
                   
                </a>
            </th>
            <th align="middle">
                
            </th>
            <th width=20%>
                Logged in as <a href="dashboard.php"> <?php echo $_SESSION['#username']  ?></a> |
                <a href=
                <?php 
                    echo isset($_SESSION['#logoutPath']) ? $_SESSION['#logoutPath'] : 'logout.php';
                    unset($_SESSION['#logoutPath']);
                ?>
                >Logout</a> 
            </th>
    </tr>
    <?php 
        // include '../../repeat/headerUser.php';
        $_SESSION['#tabname'] = 'Wallet';
        $_SESSION['#back'] = '../wallet.php';
        include '../../repeat/back.php';

    ?>
            <tr>
            <td width=20%></td>
            <td colspan="2">
                <fieldset>
                    <legend><h3>Deposite money</h3></legend>
                    <form action="unconfirmedTransactions.php" method="get">
                       <input type="text" name="username" value="" placeholder="Enter Username" > <br>
                       <input type="password" name="pin" value="" placeholder="Enter pin" > <br>
                       <input type="int" name="amount" value="" placeholder="Enter Amount" > <br>
                       <!-- <input type="text" name="name" value="" placeholder="Enter ref" > <br> -->
                       
                       <input type="submit" name="submit" value="submit"  >

                    </form>
                    <?php
                       if(isset($_GET['submit'])){
                        $db_host = '127.0.0.1';
                        $db_user = 'root';
                        $db_pass = '';
                        $db_name = 'blockchain';
                    
                        function getConnection(){
                            global $db_host;
                            global $db_name;
                            global $db_user;
                            global $db_pass;
                            $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
                            return $con;
                        }
                        // require_once('....../models/bandkModel.php');
                        // deposite($_GET['name'],$_GET('pin'),$_GET('amount'));
                        $username = $_GET['username'];
                        $pin = $_GET['pin'];
                        $amount = $_GET['amount'];
                        

                        //require_once('db.php');
                        $conn = getConnection();
                        

     $qury = "INSERT INTO `deposite`(`username`, `pin`, `amount`) VALUES ('{$username}','{$pin}','{$amount}')";
    
     $result = mysqli_query($conn,$qury);
     $conn->close();
     
                        


                       }
                       ?>
                      
                
               

               <!-- <form action="unconfirmedTransactions.php" method="get">
                      

           <select name="filter">
                <option value="received"<?php if(isset($_GET['filter']) && $_GET['filter'] == 'received') echo ' selected'; ?>>Received</option>
                 <option value="sent"<?php if(isset($_GET['filter']) && $_GET['filter'] == 'sent') echo ' selected'; ?>>Sent</option>
             </select>
             <input type="submit" value="submit" name="Submit">
             </form>
                    
             <?php 
                    
                 if(isset($_GET['filter']) && $_GET['filter'] == 'sent')
                 {
                     echo "<b>Sent Transactions</b><br>";     
             ?>
                 <table border="1" width=100%>
                     <tr>
                         <th>Sent To</th>
                         <th>Amount</th>
                         <th>Status</th>
                         <th>Time</th>
                     </tr>

                     <tr>
                         <td>abdur_rabbi_rocks</td>
                         <td>12312 USD</td>
                         <td>Unconfirmed</td>
                         <td><?php 
                             echo date('d-m-Y h:i:s', time()-25200);
                         ?></td>
                     </tr>
                     <tr>
                         <td>abdur_rabbi_rocks</td>
                         <td>12312 USD</td>
                         <td>Unconfirmed</td>
                         <td><?php 
                             echo date('d-m-Y h:i:s', time()-25200);
                         ?></td>
                     </tr>
                     <tr>
                         <td>abdur_rabbi_rocks</td>
                         <td>12312 USD</td>
                         <td>Unconfirmed</td>
                         <td><?php 
                             echo date('d-m-Y h:i:s', time()-25200);
                         ?></td> 
                     </tr>
                 </table>
             <?php 
                        
                        
                     }else 
                     {
                         echo "<b>Received Transactions</b><br>";                    
             ?>
                 <table border="1" width=100%>
                     <tr>
                         <th>From</th>
                         <th>Amount</th>
                         <th>Status</th>
                         <th>Time</th>
                                
                     </tr>

                     <tr>
                         <td>a1313asfi_r78967s</td>
                         <td>12312 USD</td>
                         <td>Unconfirmed</td>
                         <td><?php 
                             echo date('d-m-Y h:i:s', time()-25200);
                         ?></td>
                     </tr>
                     <tr>
                         <td>a1313asfi_r78967s</td>
                         <td>12312 USD</td>
                         <td>Unconfirmed</td>
                         <td><?php 
                             echo date('d-m-Y h:i:s', time()-25200);
                         ?></td>
                     </tr>
                     <tr>
                         <td>a1313asfi_r78967s</td>
                         <td>12312 USD</td>
                         <td>Unconfirmed</td>
                         <td><?php 
                             echo date('d-m-Y h:i:s', time()-25200);
                         ?></td>
                     </tr>
                            
                 </table>

             <?php 
                     }
             ?>
           
                </fieldset> -->

            </td>
        </tr>
        
        <?php 
            include '../../Repeat/footer.php';
        ?>
    </table> 
</body>
</html>