<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Cashier User Home Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cashierIndex()
    {
        return view('homepages.cashier');
    }

    /**
     * Admin User Home page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function AdminIndex()
    {
        return view('homepages.admin');
    }

}
