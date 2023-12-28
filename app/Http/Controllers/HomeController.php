<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
 


    public function dashboard()
    {
        return view("admin.admin");
    }

}
