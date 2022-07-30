<?php

namespace App\Controllers;

class Pages extends BaseController
{
    private $styleHeader = 'header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px';

    private $folder = [
        'dashboard' => 'pages/',
        'categories' => 'pages/categories/',
        'articles' => 'pages/articles/'
    ];

    public function index()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Home',
            'bodyStyle' => $this->styleHeader
        ];


        return view($this->folder['dashboard'] . 'index', $data);
    }

    public function categories()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Categories',
            'bodyStyle' => $this->styleHeader
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
        $data = [
            'title' => 'dPensiOn || Admin || Articles',
            'bodyStyle' => $this->styleHeader
        ];


        return view($this->folder['articles'] . 'articles', $data);
    }

    public function add_article()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Add Article',
            'bodyStyle' => $this->styleHeader
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
}