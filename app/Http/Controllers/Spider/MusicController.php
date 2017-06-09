<?php 



// https://music.163.com/#/playlist?id=419834163
// 
// 

namespace App\Http\Controllers\Spider;

use App\Help\Net;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;


class MusicController extends Controller
{
	public function music(){



		if(Session::has('music')){
			$json=Storage::disk('public')->get('music.json');
			Session::put('music',$json);
		}else{
			$json=Session::get('music');
		}

		return $json;

	}
}
