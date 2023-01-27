<?php
echo strlen("Hello world!"), '<br>'; // outputs 12
echo str_word_count ("I like pen pine apple"), '<br>';

echo strrev('Hello World!'), '<br>';

echo strpos('Hello World', 'World'), '<br>'; #output 6
echo str_replace("world", "Dolly", "Hello world!"), '<br>'; // outputs Hello Dolly!
 
$x = 3.1428567;
$int_cast = (int)$x;
echo $int_cast;

echo '<br>';

$y = '1122.3344';
$int_cast2 = (int)$y;
echo $int_cast2;

echo '<br>'
?>