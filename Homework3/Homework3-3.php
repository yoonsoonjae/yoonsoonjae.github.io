<!DOCTYPE html>
<html>
<body>
<form  method="post" action="Homework3-3">
100이하의 정수 n값을 입력하세요 : <input type="number" name="fibonacci-num"/>
<input type="submit" value="확인">
</form>
<?php
    if(isset($_POST['fibonacci-num']))
    {
        $n = $_POST['fibonacci-num'];
        $first = 1;
        $second = 1;
        if ($n > 100)
        {
            echo "유효하지 않은 입력값입니다. 100이하의 정수를 입력하세요";
            exit;
        }
        echo "피보나치 수열: ";
        echo $first . " " . $second . " ";
        for ($i = 3; $i <= $n; $i++)
        {
            $next = $first + $second;
            echo $next . " ";
            $first = $second;
            $second = $next;
        }
    }
?>
</body>
</html>