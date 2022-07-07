<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'dPensiOn || Admin'
        ];


        return view('pages/PageDashboard', $data);
    }
    public function ecommerce()
    {
        $data = [
            'title' => 'dPensiOn || Admin'
        ];


        return view('pages/PageECommerce', $data);
    }
}
