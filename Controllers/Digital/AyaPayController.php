<?php

namespace App\Http\Controllers\Digital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AyaPayController extends Controller
{
    public function index()
    {
        return view('aya-pay.index');
    }
}
