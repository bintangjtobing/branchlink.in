<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\linkDB;

class viewLink extends Controller
{
    public function username($username)
    {
        $userlink = DB::table('users')
            ->join('links', 'users.id', '=', 'links.ownerid')
            ->select('links.*', 'users.*')
            ->where('users.username', '=', $username)
            ->get();
        // dd($userlink);
        return view('result.index', ['userlink' => $userlink]);
    }
    public function urllink(Request $request)
    {
        $value = $request->input('value');
        return Response::JSON($value);
    }
}
