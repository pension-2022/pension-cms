<?php

namespace App\Controllers;

class Auth extends \IonAuth\Controllers\Auth
{
    protected $viewsFolder = 'pages/authentication/layouts/aside/';

    public function sign_in()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Signin',
            'bodyStyle' => 'bg-body'
        ];

        return view($this->viewsFolder . 'sign-in', $data);
    }

    public function sign_up()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Signup',
            'bodyStyle' => 'bg-body'
        ];

        return view($this->viewsFolder . 'sign-up', $data);
    }

    public function forgot_pass()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Forgot Password',
            'bodyStyle' => 'bg-body'
        ];

        return view($this->viewsFolder . 'reset-password', $data);
    }

    public function new_pass()
    {
        $data = [
            'title' => 'dPensiOn || Admin || New Password',
            'bodyStyle' => 'bg-body'
        ];

        return view($this->viewsFolder . 'new-password', $data);
    }
    /**
     * If you want to customize the views,
     *  - copy the ion-auth/Views/auth folder to your Views folder,
     *  - remove comment
     */
    // protected $viewsFolder = 'auth';
}
