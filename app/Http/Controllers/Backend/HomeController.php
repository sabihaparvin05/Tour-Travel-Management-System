<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\FuncCall;


class HomeController extends Controller
{
    public function home(){
        return view('admin.pages.home');
    }

}
