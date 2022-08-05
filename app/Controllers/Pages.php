<?php

namespace App\Controllers;

use Config\Database;

class Pages extends BaseController
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
        'articles' => 'pages/articles/',
        'authors' => 'pages/authors/'
    ];

    public function index()
    {
        $sql = "select * from t_article where c_active = ?";
        $query1 = $this->db->query($sql, 1)->getResultArray();
        $sql = "select * from t_category";
        $query2 = $this->db->query($sql, 1)->getResultArray();
        $data = [
            'title' => 'dPensiOn || Admin || Dashboard',
            'bodyStyle' => $this->styleHeader,
            'data' => $query2,
            'datarow' => $query1
        ];

        return view($this->folder['dashboard'] . 'dashboard', $data);
    }

    public function categories()
    {
        $sql = "select * from t_category";
        $query = $this->db->query($sql, 1)->getResultArray();
        $data = [
            'title' => 'dPensiOn || Admin || Categories',
            'bodyStyle' => $this->styleHeader,
            'data' => $query
        ];

        return view($this->folder['categories'] . 'categories', $data);
    }

    public function add_category()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Add Category',
            'bodyStyle' => $this->styleHeader
        ];


        return view($this->folder['categories'] . 'add-category', $data);
    }

    public function edit_category()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Edit Category',
            'bodyStyle' => $this->styleHeader
        ];


        return view($this->folder['categories'] . 'edit-category', $data);
    }

    public function articles()
    {

        $sql = "select * from t_article where c_active = ?";
        $query = $this->db->query($sql, 1)->getResultArray();
        $data = [
            'title' => 'dPensiOn || Admin || Articles',
            'bodyStyle' => $this->styleHeader,
            'datarow' => $query
        ];

        return view($this->folder['articles'] . 'articles', $data);
    }

    public function add_article()
    {
        $sql = "select * from t_category where c_active = ?";
        $query = $this->db->query($sql, 1)->getResultArray();
        $data = [
            'title' => 'dPensiOn || Admin || Add Article',
            'bodyStyle' => $this->styleHeader,
            'category' => $query
        ];


        return view($this->folder['articles'] . 'add-article', $data);
    }

    public function edit_article()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Edit Article',
            'bodyStyle' => $this->styleHeader
        ];


        return view($this->folder['articles'] . 'edit-article', $data);
    }

    public function author_list()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Author List',
            'bodyStyle' => $this->styleHeader
        ];


        return view($this->folder['authors'] . 'author-list', $data);
    }
}