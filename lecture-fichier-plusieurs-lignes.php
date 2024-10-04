<?php
$text = file_get_contents("file2.txt");
$tab = explode(PHP_EOL, $text);
foreach ($tab as $t) {
    echo $t;
    echo '<br/>';
}
