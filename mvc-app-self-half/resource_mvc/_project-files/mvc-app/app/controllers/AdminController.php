<?php




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