<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Thaad extends Model
{
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'thaad';
	protected $fillable = ['name', 'tel', 'addr', 'contents'];
	
    public static function store(Request $req)
    {
    	
    	
    	$data = new Thaad([
    		'name' => $req->name,
    		'tel' => $req->tel,
    			'addr' => $req->addr,
    			'contents' => $req->contents,
    	]);
    	
    	$data->save();
    	
    }
	
}
