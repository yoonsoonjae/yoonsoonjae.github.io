<!DOCTYPE html>
<html>
<body>
<form  method="post" action="Homework3-2">
10이상 100이하의 정수 n값을 입력하세요 : <input type="number" name="sort-num"/>
<input type="submit" value="확인">
</form>
<?php
    if(isset($_POST['sort-num']))
    {
        $n = $_POST['sort-num'];
        if ($n <10 || $n > 100)
        {
            echo "유효하지 않은 입력값입니다. 10이상 100이하의 정수를 입력하세요";
            exit;
        }
        $data = array();
        for ($i = 0; $i < $n; $i++)
        {
            $data[] = rand(10, 100);
        }

        sort($data);

        foreach ($data as $number)
        {
            echo " {$number}";
        }
        echo "</br> 생성된 수의 갯수는 {$n}개 입니다.";
    }
?>
</body>
</html>