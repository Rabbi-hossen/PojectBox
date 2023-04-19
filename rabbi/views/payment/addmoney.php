<!-- <html>

<body>
    <title>
        transfer money to bank
    </title>
    <table align="center" width=40%  style="background-color: #ffffff; filter: alpha(opacity=40); opacity: 0.95;border:1px red solid;" >

<tr align="left">
    <th>Enter Account Nummber</th>
    <th>Select Bank</th>
    <th>Enter Amount</th>
</tr>
<tr align="left">
    <td>
        <input type="text" name="acc_no" value="">

    </td>
    <td>
        <select name="bank" id="bank">
            <option value="ibbl">Islamic Bank</option>
            <option value="sb">Sonali bank</option>
            <option value="db">Dhaka bank</option>
            <option value="ucb">UCB bank</option>
        </select>
    </td>
    <td>
        <input type="number" name="amount" value="amount">
    </td>
</tr>
<tr></tr>
<tr   >
    <td></td>
    <td align="left"   >
        <input type="submit" name="submit" value="submit">
    </td>
    <td></td>
</tr>

</table>
  

</body>

</html> -->

<!-- 
================================================================================= -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <table border="1" width=70% align="center">
        <tr style="height:50px"" >
        <th width=20%> <a href=" home.php"><img src="../pic.png" alt="logo"></a> </th>
            <th width=60%></th>
            <th width=20%>

                <a href="login.php">Logged in as </a> |
                <a href="logout">LogOut</a>

            </th>

        </tr>

        <tr style="height:200px">
            <td> <b>Account</b>
                <hr>
                <ul>
                    <li><a href="../dashboard.php">Dashboard</a></li>
                    <li><a href="../editprofile/editprofile.php">Edit profile</a></li>
                    <li><a href="../search/search.php">Search</a></li>
                    <li><a href="../offer/offer.php">Offer</a></li>
                    <li><a href="payment.php">payment</a></li>
                    <li><a href="../logout.php">LogOut</a></li>

                </ul>
            </td>
            <td align="center">
                <h2></h2>
                <h2></h2>
                <h2></h2>

                <form name="reg" action="" method="" onsubmit="return validateform()">
                    <fieldset>
                        <legend align="center" >Request money from blank </legend>
                        <table align="center" width=40% style="background-color: #ffffff; filter: alpha(opacity=40); opacity: 0.95;border:1px green solid;">


                            <tr align="left">
                                <th>Enter Account Nummber</th>
                                <th>Select Bank</th>
                                <th>Enter Amount</th>
                            </tr>
                            <tr align="left">
                                <td>
                                <input type="text" name="accno" value="" placeholder="Account No">
                                </td>
                                <td>
                                    <select name="bank" id="bank">
                                        <option value="Islamic Bank">Islamic Bank</option>
                                        <option value="Sonali Bank">Sonali bank</option>
                                        <option value="Dhaka Bank">Dhaka bank</option>
                                        <option value="UCB Bank">UCB bank</option>
                                    </select>
                                    </td>
                                <td>
                                    <input type="number" name="amount" value="" placeholder="Amount in BDT">
                                </td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td></td>
                                <td align="left">
                                <input type="button" name="click" value="Re check" onclick="ajax()">
                                    <input type="submit" name="Send" value="Request Send">
                                </td>
                                <td></td>
                            </tr>

                        </table>
                    </fieldset>
                </form>

            </td>

            <td>
                <!-- <?php

                        session_start();
                        if (isset($_SESSION['name'])) {
                            echo "<p>Welcome back," . $_SESSION['name'] . "!</p>";
                        }

                        ?>  --></p>
            </td>


        </tr>
        <tr style="height:50px">
            <td colspan=3 align="center">coppy right (C) 2017</td>
        </tr>


    </table>

</body>

</html>

</html>
<script>
    function validateform() {
        var accno = document.reg.accno.value;
        var bank = document.reg.bank.value;
        var amount = document.reg.amount.value;

        if (accno == null || accno == "") {
            alert("plz enter account number");
            return false;
        }
        if (amount == null || amount == "") {
            alert("plz enter amount");
            return false;
        }

    }

    function ajax() {
        /*    let accno = document.getElementById('accno').value;
           let bank = document.getElementById('bank').value;
           let amount = document.getElementById('amount').value; */
        var accno = document.reg.accno.value;
        var bank = document.reg.bank.value;
        var amount = document.reg.amount.value;

        let data = {
            'accno': accno,
            'bank': bank,
            'amount': amount
        };
        let info = JSON.stringify(data);

        let xhttp = new XMLHttpRequest();

        xhttp.open('post', 'server.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('data=' + info);

        xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                let info = JSON.parse(this.responseText);
                document.getElementsByTagName('h2')[0].innerHTML ="Account Number: "+info.accno;
                document.getElementsByTagName('h2')[1].innerHTML ="Bank" +info.bank;
                document.getElementsByTagName('h2')[2].innerHTML = info.amount+" Tk";
            }
        }

    }
</script>
