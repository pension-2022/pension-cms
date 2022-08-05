<?php

namespace App\Controllers;

use Config\Database;

class PostController extends BaseController
{
    private $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    private $styleHeader = 'header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px';

    private $folder = [
        'dashboard' => 'pages/dashboards/',
        'categories' => 'pages/categories/',
        'articles' => 'pages/articles/'
    ];

    public function save_articles()
    {


        $photo = $this->request->getFile('photo');
        $fileName = $photo->getRandomName();
        $photo->move('uploads/photos/', $fileName);
        $input = [
            'i_categoryid' => $this->request->getPost('categoryId'),
            'n_title' => $this->request->getPost('title'),
            'n_description' => $this->request->getPost('desc'),
            'n_photo' => $fileName,
            'n_video_link' => null,
            'i_adminid' => null,
            'c_active' => 1
        ];

        $this->db->table('t_article')->insert($input);
        return redirect('articles');
    }

    public function save_categories()
    {
        $input = [
            'n_description' => $this->request->getPost('desc'),
            'c_active' => $this->request->getPost('status')
        ];

        $this->db->table('t_category')->insert($input);
        return redirect('categories');
    }
}