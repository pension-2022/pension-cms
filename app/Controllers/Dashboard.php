<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'dPensiOn || Admin'
        ];


        return view('pages/PageDashboard', $data);
    }
}
