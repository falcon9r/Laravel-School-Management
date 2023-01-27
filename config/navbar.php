<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '/assets/img/icons/spot-illustrations/falcon.png',

    'logo_text' => 'falcon',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        [
            'text' => 'Dashboard',
            'route' => 'admin.dashboard',
            'icon' => 'chart-pie',
            'can' => '',
        ],
        [
            'text' => 'Классы',
            'route' => 'admin.classes.index',
            'icon' => 'address-card',
            'can' => '',
        ],
        [
            'text' => 'Придметы',
            'route' => 'admin.subjects.index',
            'icon' => 'address-card',
            'can' => '',
        ],
        [
            'text' => 'Учетеля',
            'route' => 'admin.teachers.index',
            'icon' => 'address-card',
            'can' => '',
        ],
        [
            'text' => "Фото галерея",
            'route' => 'admin.photo-gallery.index',
            'icon' => 'address-card',
            'can' => '',
        ],
        [
            'text' => 'Новости',
            'route' => 'admin.news.index',
            'icon' => 'address-card',
            'can' => '',
        ],

        [
            'text' => 'Достижения',
            'route' => 'admin.achievements.index',
            'icon' => 'address-card',
            'can' => '',
        ],
        'App',
        [
            'text' => 'Классы',
            'icon' => 'address-card',
            'can' => '',
            'submenu' => [
                [
                    'text' => 'Клиенты',
                    'route' => 'admin.dashboard',
                    'icon' => 'address-card',
                    'can' => 'client-list',
                ],
                [
                    'text' => 'История смены номера',
                    'route' => 'admin.dashboard',
                    'icon' => 'history',
                    'can' => 'change-msisdn-history-list'
                ],
            ]
        ],
    ],

];
