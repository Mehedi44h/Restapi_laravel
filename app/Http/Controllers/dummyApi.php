<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyApi extends Controller
{
    function getData()
    {
        return ['name' => 'mehedi', 'email' => 'mehedi@gmail.com', 'phone' => '01786195122'];
    }
}