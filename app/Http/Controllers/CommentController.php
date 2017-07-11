<?php

namespace App\Http\Controllers;

use App\Comment;
class CommentController extends Controller
{

    public function list(){
        $lists=Comment::paginate(5)->all();
        return json_encode($lists);
    }

}
