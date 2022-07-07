<?php

namespace App\Controllers;

class ECommerce extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'dPensiOn || Admin'
        ];


        return view('pages/PageECommerce', $data);
    }
}
