<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        return app()->view->render('home',
            ['title' => 'Home page']
        );
    }
}