<?php

if (! function_exists('theme')) {
    function theme($folder)
    {
        return base_path('themes/' . $folder);
    }
}

if (! function_exists('cms')) {
    function cms($key)
    {
        return config('artisancms.' . $key);
    }
}
