<?php
//Рабочий пример масива в массиве

$var = 'Произвольный текст';  
$array = array(
	'key'=>'value',
	'key2'=>'value2',
	'key3'=>'value3',
	'names'=>array('Вася','Петя','Иллона','Даша'), // массив в массиве
);
	echo $array['names'][1];  // не посредственно указываем на внутренний массив - Петя
	echo '<pre>'.print_r($array,1).'</pre>'; //- выводит все массивы

?>

