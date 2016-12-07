<?php


 if ($_GET) {
    $string = serialize($_GET);
    $f = fopen('users.txt', 'a');
    fwrite($f, $string.PHP_EOL);
    fclose($f);
     header("Location:reg_user_thanks.html");
}