<?php

namespace App\Http\Controllers;
use App\Http\Controllers;

class WxController extends Controller
{
    public function index()
    {
        return json_encode($_GET);
    }

}
