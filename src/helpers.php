<?php

if (! function_exists('theme')) {
    function theme($folder)
    {
        return base_path('themes/' . $folder);
    }
}
