<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function list(){
        return view('admin.pages.payment.list');
    }
    
    public function form(){
        return view('admin.pages.payment.form');
    }
}