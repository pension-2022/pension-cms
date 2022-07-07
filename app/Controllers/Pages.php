<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Dashboard'
        ];


        return view('pages/PageDashboard', $data);
    }
    public function ecommerce()
    {
        $data = [
            'title' => 'dPensiOn || Admin || ECommerce'
        ];


        return view('pages/PageECommerce', $data);
    }
}
