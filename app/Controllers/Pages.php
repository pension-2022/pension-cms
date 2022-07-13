<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Home',
            'bodyStyle' => 'header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px'
        ];


        return view('pages/index', $data);
    }

    public function categories()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Categories',
            'bodyStyle' => 'header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px'
        ];


        return view('pages/apps/ecommerce/catalog/categories', $data);
    }

    public function add_category()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Add Category',
            'bodyStyle' => 'header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px'
        ];


        return view('pages/apps/ecommerce/catalog/add-category', $data);
    }

    public function edit_category()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Edit Category',
            'bodyStyle' => 'header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px'
        ];


        return view('pages/apps/ecommerce/catalog/edit-category', $data);
    }
}