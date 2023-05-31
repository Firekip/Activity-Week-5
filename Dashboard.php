<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function dashboard()
    {
        return view('dashboard_view');
    }

    public function resident()
    {
        return view('resident_view');
    }

    public function account()
    {
        return view('account_settings');
    }
}
