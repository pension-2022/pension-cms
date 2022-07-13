<?php

namespace App\Controllers;

class Pages extends BaseController
{
    private $styleHeader = 'header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px';

    public function index()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Home',
            'bodyStyle' => $this->styleHeader
        ];


        return view('pages/index', $data);
    }

    public function categories()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Categories',
            'bodyStyle' => $this->styleHeader
        ];


        return view('pages/apps/ecommerce/catalog/categories', $data);
    }

    public function add_category()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Add Category',
            'bodyStyle' => $this->styleHeader
        ];


        return view('pages/apps/ecommerce/catalog/add-category', $data);
    }

    public function edit_category()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Edit Category',
            'bodyStyle' => $this->styleHeader
        ];


        return view('pages/apps/ecommerce/catalog/edit-category', $data);
    }

    public function articles()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Articles',
            'bodyStyle' => $this->styleHeader
        ];


        return view('pages/apps/ecommerce/catalog/articles', $data);
    }

    public function add_article()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Add Article',
            'bodyStyle' => $this->styleHeader
        ];


        return view('pages/apps/ecommerce/catalog/add-article', $data);
    }

    public function edit_article()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Edit Article',
            'bodyStyle' => $this->styleHeader
        ];


        return view('pages/apps/ecommerce/catalog/edit-article', $data);
    }
}