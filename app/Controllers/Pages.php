<?php

namespace App\Controllers;

class Pages extends BaseController
{
    private $db;
    private $ionAuth;
    private $session; 
    private $privilege;

    public function __construct()
    {
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
        $this->db = \Config\Database::connect();
        $this->session = \Config\Services::session();
        $this->privilege = 0;
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
            $selection = 'author';      
            if ($this->ionAuth->inGroup(3))
            {
                $this->privilege = 1;
            }
            $datauser = $this->db->query("select concat(us.first_name,' ',us.last_name) as fullName,
            us.email as email,
            us.profile_photo as photo,
            us.id as id,
            (select count(*) from t_article where i_adminid = us.id) as articles
            from users us where us.id = ?",$this->session->get('id_user'))->getResultArray();
            $sql = "select
                ta.i_id,
                ta.n_photo,
                ta.n_title,
                ta.c_active,
                tc.n_description as kategori,
                DATE_FORMAT(ta.d_created_date, '%d-%m-%Y') as tanggal,
                concat(us.first_name,' ',us.last_name) as author 
                from
                    t_article ta
                join users us on
                    (ta.i_adminid = us.id)
                join t_category tc on
                    (ta.i_categoryid = tc.i_id)";
            $query1 = $this->db->query($sql)->getResultArray();
            $sql = "select * from t_category";
            $query2 = $this->db->query($sql, 1)->getResultArray();
            $sql3 = "select concat(us.first_name,' ',us.last_name) as fullName,
            us.email as email,
            DATE_FORMAT(us.created_date , '%d-%m-%Y') as joined,
            us.profile_photo as photo,
            (select count(*) from t_article where i_adminid = us.id) as articles
            from users us join users_groups ug on us.id = ug.user_id 
            where ug.group_id = 2";
            $query3 = $this->db->query($sql3)->getResultArray();
            $data = [
                'title' => 'dPensiOn || Admin || Dashboard',
                'bodyStyle' => $this->styleHeader,
                'data' => $query2,
                'datarow' => $query1,
                'priv' => $this->privilege,
                'author' => $query3,
                'datauser' => $datauser,
                'selection' => $selection
            ];
    
            return view($this->folder['dashboard'] . 'dashboard', $data);
        }
    }

    public function categories()
    {
        if (!$this->ionAuth->loggedIn())
        {
            return redirect('sign-in');
        } 
        
        if ($this->ionAuth->inGroup(3))
        {
            $this->privilege = 1;
        } else {
            return redirect('/');
        }
        
        $datauser = $this->db->query("select concat(us.first_name,' ',us.last_name) as fullName,
        us.email as email,
        us.profile_photo as photo,
        us.id as id,
        (select count(*) from t_article where i_adminid = us.id) as articles
        from users us where us.id = ?",$this->session->get('id_user'))->getResultArray();
        $sql = "select i_id, n_description, c_active from t_category";
        $query = $this->db->query($sql, 1)->getResultArray();
        $data = [
            'title' => 'dPensiOn || Admin || Categories',
            'bodyStyle' => $this->styleHeader,
            'data' => $query,
            'priv' => $this->privilege,
            'datauser' => $datauser
        ];

        return view($this->folder['categories'] . 'categories', $data);
    }

    public function add_category()
    {
        if (!$this->ionAuth->loggedIn())
        {
            return redirect('sign-in');
        } 
        
        if ($this->ionAuth->inGroup(3))
        {
            $this->privilege = 1;
        } else {
            return redirect('/');
        }
        
        $datauser = $this->db->query("select concat(us.first_name,' ',us.last_name) as fullName,
        us.email as email,
        us.profile_photo as photo,
        us.id as id,
        (select count(*) from t_article where i_adminid = us.id) as articles
        from users us where us.id = ?",$this->session->get('id_user'))->getResultArray();
        $data = [
            'title' => 'dPensiOn || Admin || Add Category',
            'bodyStyle' => $this->styleHeader,
            'priv' => $this->privilege,
            'datauser' => $datauser
        ];


        return view($this->folder['categories'] . 'add-category', $data);
    }

    public function edit_category()
    {
        if (!$this->ionAuth->loggedIn())
        {
            return redirect('sign-in');
        } 

        if ($this->ionAuth->inGroup(3))
        {
            $this->privilege = 1;
        } else {
            return redirect('/');
        }

        
        $datauser = $this->db->query("select concat(us.first_name,' ',us.last_name) as fullName,
        us.email as email,
        us.profile_photo as photo,
        us.id as id,
        (select count(*) from t_article where i_adminid = us.id) as articles
        from users us where us.id = ?",$this->session->get('id_user'))->getResultArray();
        $data = [
            'title' => 'dPensiOn || Admin || Edit Category',
            'bodyStyle' => $this->styleHeader,
            'priv' => $this->privilege,
            'datauser' => $datauser
        ];


        return view($this->folder['categories'] . 'edit-category', $data);
    }

    public function articles()
    {
        if (!$this->ionAuth->loggedIn())
        {
            return redirect('sign-in');
        } 

        
        if ($this->ionAuth->inGroup(3))
        {
            $this->privilege = 1;
            $sql = "select
            ta.i_id,
            ta.n_photo,
            ta.n_title,
            ta.c_active,
            tc.n_description as kategori,
            DATE_FORMAT(ta.d_created_date, '%d-%m-%Y') as tanggal,
            concat(us.first_name,' ',us.last_name) as author 
            from
                t_article ta
            join users us on
                (ta.i_adminid = us.id)
            join t_category tc on
                (ta.i_categoryid = tc.i_id)";
                
            $query = $this->db->query($sql)->getResultArray();
        } else {
            $sql = "select
            ta.i_id,
            ta.n_photo,
            ta.n_title,
            ta.c_active,
            tc.n_description as kategori,
            DATE_FORMAT(ta.d_created_date, '%d-%m-%Y') as tanggal,
            concat(us.first_name,' ',us.last_name) as author 
            from
                t_article ta
            join users us on
                (ta.i_adminid = us.id)
            join t_category tc on
                (ta.i_categoryid = tc.i_id)
            where
                ta.i_adminid = ?";
            $query = $this->db->query($sql,  $this->session->get('id_user'))->getResultArray();
        }

        
        $datauser = $this->db->query("select concat(us.first_name,' ',us.last_name) as fullName,
        us.email as email,
        us.profile_photo as photo,
        us.id as id,
        (select count(*) from t_article where i_adminid = us.id) as articles
        from users us where us.id = ?",$this->session->get('id_user'))->getResultArray();
        $data = [
            'title' => 'dPensiOn || Admin || Articles',
            'bodyStyle' => $this->styleHeader,
            'datarow' => $query,
            'priv' => $this->privilege,
            'datauser' => $datauser
        ];

        return view($this->folder['articles'] . 'articles', $data);
    }

    public function add_article()
    {
        if (!$this->ionAuth->loggedIn())
        {
            return redirect('sign-in');
        }
        
        
        if ($this->ionAuth->inGroup(3))
        {
            $this->privilege = 1;
        }

        
        $datauser = $this->db->query("select concat(us.first_name,' ',us.last_name) as fullName,
        us.email as email,
        us.profile_photo as photo,
        us.id as id,
        (select count(*) from t_article where i_adminid = us.id) as articles
        from users us where us.id = ?",$this->session->get('id_user'))->getResultArray();
        $sql = "select * from t_category where c_active = ?";
        $query = $this->db->query($sql, 1)->getResultArray();
        $data = [
            'title' => 'dPensiOn || Admin || Add Article',
            'bodyStyle' => $this->styleHeader,
            'category' => $query,
            'priv' => $this->privilege,
            'datauser' => $datauser
        ];


        return view($this->folder['articles'] . 'add-article', $data);
    }

    public function edit_article($id)
    {
        if (!$this->ionAuth->loggedIn())
        {
            return redirect('sign-in');
        } 

        
        if ($this->ionAuth->inGroup(3))
        {
            $this->privilege = 1;
        }

        
        $datauser = $this->db->query("select concat(us.first_name,' ',us.last_name) as fullName,
        us.email as email,
        us.profile_photo as photo,
        us.id as id,
        (select count(*) from t_article where i_adminid = us.id) as articles
        from users us where us.id = ?",$this->session->get('id_user'))->getResultArray();
        $sql = "select * from t_category where c_active = ?";
        $query = $this->db->query($sql, 1)->getResultArray();
        $sql2 = "select * from t_article where i_id = ?";
        $query2 = $this->db->query($sql2, $id)->getResultArray();
        $data = [
            'title' => 'dPensiOn || Admin || Edit Article',
            'bodyStyle' => $this->styleHeader,
            'category' => $query,
            'article' => $query2,
            'priv' => $this->privilege,
            'datauser' => $datauser
        ];


        return view($this->folder['articles'] . 'edit-article', $data);
    }

    public function author_list()
    {
        if (!$this->ionAuth->loggedIn())
        {
        } 

        if ($this->ionAuth->inGroup(3))
        {
            $this->privilege = 1;
            $selection = 'author';
        } else {
            return redirect('/');
        }

        
        $datauser = $this->db->query("select concat(us.first_name,' ',us.last_name) as fullName,
        us.email as email,
        us.profile_photo as photo,
        us.id as id,
        (select count(*) from t_article where i_adminid = us.id) as articles
        from users us where us.id = ?",$this->session->get('id_user'))->getResultArray();
        $sql = "select concat(us.first_name,' ',us.last_name) as fullName,
        us.email as email,
        DATE_FORMAT(us.created_date , '%d-%m-%Y') as joined,
        us.profile_photo as photo,
        us.is_approved as statusApproval,
        (select count(*) from t_article where i_adminid = us.id) as articles
        from users us join users_groups ug on us.id = ug.user_id 
        where ug.group_id = 2";
        $query = $this->db->query($sql)->getResultArray();
        $data = [
            'title' => 'dPensiOn || Admin || Author List',
            'bodyStyle' => $this->styleHeader,
            'priv' => $this->privilege,
            'author' => $query,
            'datauser' => $datauser,
            'selection' => $selection
        ];


        return view($this->folder['authors'] . 'author-list', $data);
    }

    public function users_list()
    {
        if (!$this->ionAuth->loggedIn())
        {
        } 

        if ($this->ionAuth->inGroup(3))
        {
            $this->privilege = 1;
            $selection = 'user';
        } else {
            return redirect('/');
        }

        
        $datauser = $this->db->query("select concat(us.first_name,' ',us.last_name) as fullName,
        us.email as email,
        us.profile_photo as photo,
        us.id as id,
        (select count(*) from t_article where i_adminid = us.id) as articles
        from users us where us.id = ?",$this->session->get('id_user'))->getResultArray();
        $sql = "select concat(us.first_name,' ',us.last_name) as fullName,
        us.email as email,
        DATE_FORMAT(us.created_date , '%d-%m-%Y') as joined,
        us.profile_photo as photo,
        us.is_approved as statusApproval,
        (select count(*) from t_article where i_adminid = us.id) as articles
        from users us join users_groups ug on us.id = ug.user_id 
        where ug.group_id = 1";
        $query = $this->db->query($sql)->getResultArray();
        $data = [
            'title' => 'dPensiOn || Admin || Author List',
            'bodyStyle' => $this->styleHeader,
            'priv' => $this->privilege,
            'author' => $query,
            'datauser' => $datauser,
            'selection' => $selection
        ];


        return view($this->folder['authors'] . 'author-list', $data);
    }
}