<?php

$GLOBALS['ROOT_DOCUMENT'] = realpath($_SERVER["DOCUMENT_ROOT"]);

if(!function_exists('getUri')) {
    function getUri(): string
    {
        return explode("?", $_SERVER['REQUEST_URI'])[0];
    }
}
