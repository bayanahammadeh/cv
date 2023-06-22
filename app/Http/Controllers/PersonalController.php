<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        $personal=Personal::all()->first();
        return view('index',compact('personal'));
    }
}
