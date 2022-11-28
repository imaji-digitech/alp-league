<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchMakingController extends Controller
{
    public function index(){
        return view('pages.match-making.index');
    }
    public function create(){
        return view('pages.match-making.create');
    }
    public function edit($id){
        return view('pages.match-making.edit',compact('id'));
    }
}
