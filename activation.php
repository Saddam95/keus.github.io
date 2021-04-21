<?php

if (isset($_GET['key']))
{
    $res = 'false';
    $fd = fopen("keys.txt", 'r') or die("error!");
    while(!feof($fd))
    {
        $str = trim(htmlentities(fgets($fd)));
        if ($_GET['key'] == $str)
        {
            $res = 'true';
            break;
        }
    }
    fclose($fd);
    echo $res;
}

?>