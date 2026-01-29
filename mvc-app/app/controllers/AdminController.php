<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


class AdminController {


    public function __construct() {

        AuthMiddleware::isAuthenticated();

    }


    public function dashboard() {
        $data = [
            'title' => 'Dashboard',
            'message' => 'Welcome to the dashboard',
        ];

        render('admin/dashboard', $data, 'layouts/admin_layout');
    }


    public function admin() {
        $data = [
            'title' => 'Dashboard',
            'message' => 'Welcome to the dashboard',
        ];

        render('admin/index', $data, 'layouts/admin_layout');
    }







}