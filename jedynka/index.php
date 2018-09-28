<html>
<head></head>
<body>

<?php

$array = array();
$arrayLength = rand(10,60);
//echo $arrayLength;
for($i = 0; $i < $arrayLength; $i++){
  array_push($array, rand(1,100));
}




$average = array_sum($array)/$arrayLength;
echo ~~$average;
echo "</br>";
echo "to jest średnia wartość z elementów tablicy";
echo "</br>";



function fib($n)
{
   if($n == 0) return 0;
   else if ($n == 1) return 1;
   else
   {
      return fib($n-1) + fib($n-2);
   }
}


$last = array_pop($array);
echo "</br>";
echo "Ciag fibonacciego dla ostatniego elementu tablicy = ";
echo fib($last);

?>

<div class=".$arrayLength.">jakto</div><div class="column2">jakto</div><div class="column3">jakto</div>

</body>
</html>

<?php

