<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thaad;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$count = Thaad::all()->count();
        return view('index')->with('count', $count);
    }
    
    public function create(Request $req)
    {
    	$this->validate($req, [
    			'name' => 'required',
    			'tel' => 'required|max:11|unique:thaad',
    			'addr' => 'required',
    			'chk1' => 'required',
    	]);
    	
    	Thaad::store($req);
    	
    	return view('complete')->with('name', $req->name);
    }
    
    public function list()
    {
    	$data = Thaad::all();
    	dd($data);
    }
}
