<?php

Menu::make('admin-main', function ($menu) {
    
});

Menu::make('admin-sidebar', function ($menu) {
    $menu->add('Dashboard', ['url' => 'dashboard'])
    ->prepend('<i class="fa fa-tachometer"></i>');
});
