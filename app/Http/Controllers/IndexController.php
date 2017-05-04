<?php
namespace App\Http\Controllers;

use App\Http\Controllers;
use App\User;

/**
 *
 */
class IndexController extends Controller
{

    public function index()
    {
        return view('public.index');
    }
    public function lists()
    {
        $users = User::paginate(10);

        return view('user.lists', [
            'users' => $users,
        ]);
    }
}
