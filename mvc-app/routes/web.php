<?php


$routes = [
    'GET' => [
        '/' => 'HomeController@index',
        '/about' => 'HomeController@about',
        '/contact' => 'HomeController@contact',
        '/user/register' => 'UserController@showRegisterForm',
        '/user/login' => 'UserController@showLoginForm',
        '/dashboard' => 'AdminController@dashboard',
        '/admin' => 'AdminController@admin',
        '/admin/users/profile' => 'UserController@showProfile',
        '/admin/articles/index' => 'ArticlesController@index',
        '/user/test' => 'UserController@test',

    ],

    'POST' => [
        '/register' => 'UserController@register',
        '/login' => 'UserController@loginUser',
        '/logout' => 'UserController@logout',
        '/admin/user/update' => 'UserController@updateProfile',
        '/admin/profile/password/update' => 'UserController@updateProfilePassword',
    ]

];





// $routes = [
//     '' => 'HomeController@index',
//     'about' => 'HomeController@about',
//     'user/register' => 'UserController@register',

// ];




