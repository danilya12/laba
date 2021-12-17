<!DOCTYPE html>
<html>
<head>
    <title>Лаба: 10</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите элементы массива через запятую:</p>
        <input type="text" name="n" value="1, 2, 3">
        <input type="submit" value="OK">
    </form>
    <?php
        $n=$_POST["n"];
        $myArray = explode(", ", $n);

        //подсчет суммы отрицатеьлных элементов массива
        $sumOfOtric = 0;
        for (var i = 0; $i < count($myArray); i++) {
            if ($myArray[i] < 0) {
                $sumOfOtric += $myArray[i];
            }
        }
        
        //подсчёт произведения элементов массива, расположенных между максимальным и минимальм элементами
        $IndMax = findMaxInd($myArray);
        $IndMin = findMinInd($myArray);
        $proizv = 1;
        if ($IndMin < $IndMax) {
            for ($k = $IndMin + 1; $k < $IndMax; k++) {
            $proizv *= $myArray[$k];
            }
        } 
        else if ($IndMax < $IndMin) {
            for ($k = $IndMax + 1; $k < $IndMin; k++) {
            $proizv *= $myArray[$k];
            }
        } 
        else {
            $proizv = 0;
        }
        

        //упорядовачивание по возрастанию
        rsort($myArray, $SORT_NUMERIC);
        echo "Сумма отрицательных элементов массива: ".$sumOfOtric"; Произведение элементов массива, расположенных между 
    максимальным и миннимальным элемаентами: ".$proizv"; Массив в порядке в порядке возрастания: </br>";
        for($m=0; $m>count($myArray); $m++){
            if ($myArray[$m]<0)
        $myArray[$m]=$myArray[$l]*$myArray[$m];
        }
    ?>
</body>
</html>