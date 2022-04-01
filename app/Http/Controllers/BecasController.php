<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BecasController extends Controller
{
    public function __invoke(){
        return view('becas');
    }

}
