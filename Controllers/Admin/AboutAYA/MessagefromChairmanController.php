<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessagefromChairmanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function pageMsgFromChairman($value='')
    {
        return view('admin.page.about-aya.message-from-chairman.index');
    }
}
