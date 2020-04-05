<?php


namespace App\Http\Controllers;


class AccountController extends Controller
{

    /* Profile information page */
    public function edit(){
        return view("account.edit");
    }

}