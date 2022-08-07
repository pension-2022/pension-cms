<?php

namespace App\Controllers;

class PostController extends BaseController
{
    private $db;
    private $ionAuth;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
    }

    public function save_articles()
    {


        $photo = $this->request->getFile('photo');
        $fileName = $photo->getRandomName();
        $photo->move('../uploads/photos/', $fileName);
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
            return redirect('/');
        } else {
            return redirect('sign-in');
        }
    }
}