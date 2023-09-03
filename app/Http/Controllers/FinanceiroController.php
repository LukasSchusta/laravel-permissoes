<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    public function show(){
        return view('financeiro');
    }
}
