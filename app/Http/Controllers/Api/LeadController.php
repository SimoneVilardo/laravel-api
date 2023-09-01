<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class LeadController extends Controller
{
    public function store(Request $request){
        $data = $request->all();
    }
}
