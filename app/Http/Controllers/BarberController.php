<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarberController extends Controller
{
    Private $loggerUser;
    public function __construct(){

        $this->middleware('auth:api');
        $this->loggerUser = auth()->user();
    }

    public function createRandom(){

    }
}
