<?php
// include 'function.php';
function volumeKubus($s)
{
    return pow($s, 3);
}
function lpKubus($s)
{
    return 6 * pow($s, 2);
}
function volumeBalok($p, $l, $t)
{
    return $p * $l * $t;
}
function lpBalok($p, $l, $t)
{
    return 2 * ($p * $l + $p * $t + $l * $t);
}
function volumeLimas($s, $t)
{
    return 1 / 3 * pow($s, 2) * $t;
}
