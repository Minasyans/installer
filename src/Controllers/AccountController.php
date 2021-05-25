<?php

namespace Minasyans\Installer\Controllers;

use Illuminate\Routing\Controller;

class AccountController extends Controller
{

    public function account() {
        return view('installer::account');
    }

}
