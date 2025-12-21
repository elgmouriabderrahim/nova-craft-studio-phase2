<?php
function set_flash($key, $message) {
    $_SESSION['flash'][$key] = $message;
}

function display_flash($key) {
    if (isset($_SESSION['flash'][$key])) {
        $msg = $_SESSION['flash'][$key];
        unset($_SESSION['flash'][$key]);
        return $msg;
    }
    return null;
}
