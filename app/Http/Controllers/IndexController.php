<?php 
namespace App\Http\Controllers;
use App\Http\Controllers;
/**
*
*/
class IndexController extends Controller
{
	
	public function index(){
		return view('public.index');
	}

}