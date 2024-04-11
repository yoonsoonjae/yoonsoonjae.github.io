<!DOCTYPE html>
<html>
<body>
<form  method="post" action="Homework3-1">
양의 정수 n값을 입력하세요 : <input type="number" name="sum-num"/>
<input type="submit" value="확인">
</form>
<?php
    if(isset($_POST['sum-num']))
    {
        $n = $_POST['sum-num'];
        $sum = 0;
        $prod= 1;
        for($i=1; $i <= $n; $i++)
        {
            if ($i < $n)
            {
                echo "{$i} + ";
            }
            else
            {
                echo "{$i} = ";
            }
            $sum += $i;
        }
        
        echo"{$sum}</br>";
        
        for($i=1; $i <= $n; $i++)
        {
            if ($i < $n)
            {
                echo "{$i} * ";
            }
            else
            {
                echo "{$i} = ";
            }
            $prod *= $i;
        }
        echo"{$prod}</br>";
        echo "<p>1부터 {$n}값까지의 합은 {$sum} 입니다.</br></p>";
        echo "<p>1부터 {$n}값까지의 곱은 {$prod} 입니다.</p>";
    }
?>
</body>
</html>
