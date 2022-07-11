<?php

namespace App\Controllers;

class Auth extends \IonAuth\Controllers\Auth
{
    public function sign_in()
    {
        $data = [
            'title' => 'dPensiOn || Admin || Login',
            'bodyStyle' => 'bg-body'
        ];

        return view('pages/authentication/layouts/aside/sign-in', $data);
    }
    /**
     * If you want to customize the views,
     *  - copy the ion-auth/Views/auth folder to your Views folder,
     *  - remove comment
     */
    // protected $viewsFolder = 'auth';
}
