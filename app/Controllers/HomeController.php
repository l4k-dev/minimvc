<?php

namespace App\Controllers;

use App\Core\Database;
use App\Core\View;

use App\Models\Home;


class HomeController
{
    public function index()
    {
        $db = new Database();

        $pdo = $db->connection();

        $home = Home::first();

        View::render('home.index', [
            'home' => $home
        ]);
    }
}