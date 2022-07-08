<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Home'
        ];


        return view('pages/index', $data);
    }
    public function ecommerce()
    {
        $data = [
            'title' => 'dPensiOn || Admin || ECommerce'
        ];


        return view('pages/ecommerce', $data);
    }
}
