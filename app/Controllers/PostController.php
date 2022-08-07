<?php

namespace App\Controllers;

class PostController extends BaseController
{
    private $db;
    private $ionAuth;
    private $session; 

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
        $this->session = \Config\Services::session(); 
        helper('filesystem');
    }

    public function save_articles()
    {
        if($this->request->getPost('id') != null){
            $table =  $this->db->table('t_article');
            $table->set('n_title', $this->request->getPost('title'));
            $table->set('n_description', $this->request->getPost('desc'));
            $table->set('i_categoryid', $this->request->getPost('categoryId'));
            $sql2 = "select * from t_article where i_id = ?";
            $query2 = $this->db->query($sql2, $this->request->getPost('id'))->getResultArray();
            foreach($query2 as $data){
                if($data['n_photo'] != $this->request->getFile('photo')->getFilename() && $this->request->getFile('photo')->getFilename() != null){
                    $fileName = $this->request->getFile('photo')->getRandomName();
                    delete_files(site_url().'uploads/photos/'.$data['n_photo']);
                    $this->request->getFile('photo')->move('uploads/photos/', $fileName);
                    $table->set('n_photo', $fileName);
                }
            }
            $table->where('i_id', $this->request->getPost('id'));
            $table->update();
        } else {
            $photo = $this->request->getFile('photo');
            $fileName = $photo->getRandomName();
            $photo->move('uploads/photos/', $fileName);
            $input = [
                'i_categoryid' => $this->request->getPost('categoryId'),
                'n_title' => $this->request->getPost('title'),
                'n_description' => $this->request->getPost('desc'),
                'n_photo' => $fileName,
                'n_video_link' => null,
                'i_adminid' => $this->session->get('id_user'),
                'c_active' => 1
            ];
            $this->db->table('t_article')->insert($input);
        }        
        
        return redirect('articles');
    }

    public function save_categories()
    {
        $input = [
            'n_description' => $this->request->getPost('desc'),
            'c_active' => $this->request->getPost('status')
        ];

        $this->db->table('t_category')->insert($input);
        return redirect()->to(base_url('categories'));
    }

    public function register_author()
    {
        $username = 'admin';
        $password = $this->request->getPost('password');
        $email = $this->request->getPost('email');
        $additional_data = array(
            'first_name' => $this->request->getPost('firstName'),
            'last_name' => $this->request->getPost('lastName'),
        );
        $group = array(2);

        $this->ionAuth->register($username, $password, $email, $additional_data, $group);

        return redirect()->to(base_url('authors'));
    }

    public function login(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        if($this->ionAuth->login($username, $password) == TRUE){
            $sql = "select * from users where email = ?";
            $query1 = $this->db->query($sql, $username)->getResultArray();
            foreach($query1 as $data){
                $newdata = [
                    'id_user'  => $data['id']
                ];
                $this->session->set($newdata);
            }
            return redirect('/');
        } else {
            return redirect('sign-in');
        }
    }
}