<?php

namespace App\Controllers;

class Pages extends BaseController
{
    private $db;
    private $ionAuth;

    public function __construct()
    {
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
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
        if (!$this->ionAuth->loggedIn())
        {
            return redirect('sign-in');
        } else {
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
    }

    public function categories()
    {
        $sql = "select i_id, n_description, c_active from t_category";
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

        $sql = "select
        ta.i_id,
        ta.n_photo,
        ta.n_title,
        ta.c_active,
        tc.n_description as kategori,
        concat(us.first_name,' ',us.last_name) as author 
        from
            t_article ta
        join users us on
            (ta.i_adminid = us.id)
        join t_category tc on
            (ta.i_categoryid = tc.i_id)
        where
            ta.c_active = ?";
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

    public function edit_article($id)
    {
        $sql = "select * from t_category where c_active = ?";
        $query = $this->db->query($sql, 1)->getResultArray();
        $sql2 = "select * from t_article where i_id = ?";
        $query2 = $this->db->query($sql2, $id)->getResultArray();
        $data = [
            'title' => 'dPensiOn || Admin || Edit Article',
            'bodyStyle' => $this->styleHeader,
            'category' => $query,
            'article' => $query2
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