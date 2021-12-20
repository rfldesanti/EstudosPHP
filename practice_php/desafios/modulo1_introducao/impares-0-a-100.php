 <?php

$result = 0;

for($i = 0; $i <= 100; $i++) {
    $result = $i % 2;
    if($result != 0)
        echo $i . PHP_EOL;
}