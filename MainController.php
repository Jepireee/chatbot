<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ISMODEL;
use App\Models\TestModel;

use Validator;
use Auth;

class MainController extends Controller
{
    function messageBot()
    {
        return view('messageBot');
    }

    function test()
    {
        return view('test');
    }
}

?>