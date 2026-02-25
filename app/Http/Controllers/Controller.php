<?php

namespace App\Http\Controllers;

use function Ramsey\Uuid\v1;

abstract class Controller
{
    public function homepage(){
        return view("loggedin.homepage");
    }
}
