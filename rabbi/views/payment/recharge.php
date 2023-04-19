<!-- <html>
    <body>
        <title>
            mobile recharge
        </title>
        <table align="center"  width = 40% >

            <tr align="left">
                <th>Enter Nummber</th>
                <th>Select operator</th>
                <th>Enter Amount</th>
            </tr>
            <tr align="left">
                <td>
                    <input type="number" name="mobile_no" value="number" >

                </td>
                <td>
                    <select name="operator" id="operator">
                        <option value="teletalk">teletalk</option>
                        <option value="gp">grameenphone</option>
                        <option value="robi">Robi</option>
                        <option value="bl">Banglalink</option>
                    </select>
                </td>
                <td>
                    <input type="number" name="amount" value="amount">
                </td>
            </tr>
            <tr align="center" >
                <td colspan="3" >
                  <input type="submit"  name="submit" value="submit" >
                </td>
            </tr>

        </table>
    </body>
</html>
-----------------------------------------
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <table border="1" width=70% align="center">
        <tr style="height:50px"" >
        <th width=20%> <a href=" home.php"><img src="../pic.png" alt="logo"  ></a> </th>
            <th width=60%></th>
            <th width=20%>

                <a href="login.php">Logged in as  </a> |
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
            <td align="center" >
                <h2></h2>
                <h2></h2>
                <h2></h2>
            <form name="reg" action="" method="" onsubmit="return validateform()">
                   <fieldset>
                    <legend align="center" > Mobile Recharge</legend>               
                    <table align="center" width=40% style="background-color: #ffffff; filter: alpha(opacity=40); opacity: 0.95;border:1px green solid;">


<tr align="left">
    <th>Enter Nummber</th>
    <th>Select operator</th>
    <th>Enter Amount</th>
</tr>
<tr align="left">
    <td>
        <input type="number" name="mobile_no" value=""  placeholder="Mobile  Number " >

    </td>
    <td>
        <select name="sim" id="sim">
            <option value="Teletalk">teletalk</option>
            <option value="Grameenphone">grameenphone</option>
            <option value="Robi">Robi</option>
            <option value="Banglalink">Banglalink</option>
        </select>
    </td>
    <td>
   
        <input type="number" name="amount" value="" placeholder="Enter Amount in BDT" >
    </td>
</tr>
<tr align="center" >
    <td colspan="3" >
    <input type="button" name="click" value="Re check" onclick="ajax()">
      <input type="submit"  name="submit" value="Confirmed!!!" >
    </td>
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


<script>
    function validateform() {
        var mobile_no = document.reg.mobile_no.value;
        var sim = document.reg.sim.value;
        var amount = document.reg.amount.value;

        if (mobile_no == null || mobile_no == "") {
            alert("plz enter Mobile number");
            return false;
        }
        if (amount == null || amount == "") {
            alert("plz enter amount");
            return false;
        }

    }

    function ajax() {
       
           var mobile_no = document.reg.mobile_no.value;
        var sim = document.reg.sim.value;
        var amount = document.reg.amount.value;

        let data = {
            'mobile_no': mobile_no,
            'sim': sim,
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
                document.getElementsByTagName('h2')[0].innerHTML = "Moblile no: "+info.mobile_no;
                document.getElementsByTagName('h2')[1].innerHTML = info.sim;
                document.getElementsByTagName('h2')[2].innerHTML = info.amount+" Tk";
            }
        }

    }
</script>
