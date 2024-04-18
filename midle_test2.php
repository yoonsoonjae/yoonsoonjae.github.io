<!DOCTYPE html>
<html>
<body>
<form  method="post" action="">
input number : <input type="number" name="num"/>
<input type="submit" value="ok!">
</form>
<?php
    if(isset($_POST['num']))
    {
        $n = $_POST['num'];
        $array = array();
        $max = 0;
        for($i=0; $i < $n; $i++)
        {
            $array[$i] = rand(0,99);
            echo " $array[$i]";
        }
        $max = max($array);
        echo "</p>";
        echo "<p> maxium = $max</p>";

    }
?>
</body>
</html>