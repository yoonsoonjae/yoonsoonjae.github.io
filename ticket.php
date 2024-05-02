//ticket.php
<?php
$link = mysqli_connect("localhost", 'root', '','ticket');
$_GET['order'] = isset($order) ? $_GET['order'] : null;
?>
<html>
<head>
    <meta charset="utf-8">
    <title>ticket</title>
    <style>
        .input-wrap {
            width: 960px;
            margin: 0 auto;
        }
        h1 { text-align: center; }
        th, td { text-align: center; }
        table {
            border: 1px solid #000;
            margin: 0 auto;
        }
        td, th {
            border: 1px solid #ccc;
        }
        a { text-decoration: none; }
    </style>
</head>
<body>
    <div class="input-wrap">
        <form action="ticket.php" method="POST">
            <table>
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>구분</th>
                        <th colspan = "2">어린이</th>
                        <th colspan = "2">어른</th>
                        <th>비고</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>입장권</td>
                        <td>7,000</td>
                        <td><select name="pass_ch">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option></td>
                        <td>10,000</td>
                        <td><select name="pass_ad">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option></td>
                        <td>입장</td>
                        </select>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BIG3</td>
                        <td>12,000</td>
                        <td><select name="big_ch">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option></td>
                        <td>16,000</td>
                        <td><select name="big_ad">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option></td>
                        <td>입장+놀이3종</td>
                        </select>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>자유이용권</td>
                        <td>21,000</td>
                        <td><select name="free_ch">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option></td>
                        <td>26,000</td>
                        <td><select name="free_ad">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option></td>
                        <td>입장+놀이자유</td>
                        </select>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>연간이용권</td>
                        <td>70,000</td>
                        <td><select name="yfree_ch">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option></td>
                        <td>90,000</td>
                        <td><select name="yfree_ad">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option></td>
                        <td>입장+놀이자유</td>
                        </select>
                    </tr>
                </tbody>
                <tbody>
                <?php
                    if (isset($_POST['pass_ch']) && strlen($_POST['pass_ch']) > 0) {
                        $pachsum = $_POST['pass_ch'] * 7000;
                        $sql=" INSERT INTO  `users` ".   //users -> table name
                        "('name','pass_ch','pass_ad','big_ch','big_ad','free_ch','free_ad','yfree_ch','yfree_ad','total');".
                        "VALUES ('$_POST[pass_ch]',  '$sum')";
                        }
                    if (isset($_POST['pass_ad']) && strlen($_POST['pass_ad']) > 0){
                        $paadsum = $_POST['pass_ad'] * 10000;
                        $sql=" INSERT INTO  `users` "
                    }
                    if (isset($_POST['big_ch']) && strlen($_POST['big_ch']) > 0){
                        $bigchsum = $_POST['big_ch'] * 12000;
                        $sql=" INSERT INTO  `numticket` "
                    }
                    if (isset($_POST['big_ad']) && strlen($_POST['big_ad']) > 0){
                        $bigadsum = $_POST['big_ad'] * 16000;
                        $sql=" INSERT INTO  `numticket` "
                    }
                    if (isset($_POST['free_ch']) && strlen($_POST['free_ch']) > 0){
                        $freechsum = $_POST['free_ch'] * 21000;
                        $sql=" INSERT INTO  `numticket` "
                    }
                    if (isset($_POST['free_ad']) && strlen($_POST['free_ad']) > 0){
                        $freeadsum = $_POST['free_ad'] * 26000;
                        $sql=" INSERT INTO  `numticket` "
                    }
                    if (isset($_POST['yfree_ch']) && strlen($_POST['yfree_ch']) > 0){
                        $yfreechsum = $_POST['yfree_ch'] * 70000;
                        $sql=" INSERT INTO  `numticket` "
                    }
                    if (isset($_POST['yfree_ad']) && strlen($_POST['yfree_ad']) > 0){
                        $yfreeadsum = $_POST['yfree_ad'] * 90000;
                        $sql=" INSERT INTO  `numticket` "
                    }
                        else if (isset($_POST['update']) &&  $_POST['update'] == "update" ) {
                            $sum = $_POST['math'] + $_POST['science'] + $_POST['korea'] + $_POST['english'];
                            $mean = $sum / 4;
                            /* insert OR update */
                            $sql = "REPLACE INTO  `numticket` ".   //scores -> table name
                            "(`number` , `name` , `math` , `science` , `korea` , `english` , `mean` , `sum` )".
                            "VALUES ('$_POST[number]',  '$_POST[name]',  '$_POST[math]',  '$_POST[science]',  '$_POST[korea]',  '$_POST[english]',  '$mean',  '$sum')";
                            
                        }
                        else if ( $_POST['delete'] == "delete" ) {
                            /* delete */
                            $sql = "DELETE FROM  `numeticket` ".    //scores -> table name
                            "WHERE number = '$_POST[number]'";
                            
                        }
                        mysqli_query($link,$sql);
                    }

                    $result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error());
                        while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
                        echo "<tr>";
                        foreach ($line as $col_value) {
                            echo "<td>$col_value</td>";
                        }
                        echo "</tr>";
                    }
                    mysqli_free_result($result);
                    mysqli_close($link);
                ?>
            </tbody>

            </table>
       </form>
       <?php echo date("h:i:sa"); ?>
       <?php
        mysqli_free_result($result);
        mysqli_close($link);
       ?>
    </div>
</body>
</html>
