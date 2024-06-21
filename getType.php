<?php
$str = "文字列です。"; 
$int_number = 4;
$arr = array(1,2,3,4); 
$null = null;
$true = true; 

echo gettype($str) . PHP_EOL;
echo gettype($int_number) . PHP_EOL;
echo gettype($arr) . PHP_EOL;
echo gettype($null) . PHP_EOL;
echo gettype($true) . PHP_EOL;
?>
<?php echo gettype("Hello, World!"); ?>
