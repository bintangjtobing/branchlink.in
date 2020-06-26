<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\linkDB;
use Auth;
use App\optionaldb;
use App\User;

class LinksController extends Controller
{
    public function testvv()
    {
        $link = DB::table('links')
            ->orderBy('links.created_at', 'DESC')
            ->select('links.*')
            ->where('links.ownerid', '=', Auth::id())
            ->get();
        // dd($link);
        // $getid =  auth()->user()->id;
        $opt = DB::table('optionaldbs')
            ->select('optionaldbs.*')
            // ->where('optionaldbs.userid', '=', auth()->user()->id)
            ->orderBy('optionaldbs.created_at', 'DESC')
            ->first();
        return view('dashboardv2.master', ['link' => $link, 'opt' => $opt]);
        // return view('dashboard.content.home');
    }
    public function index()
    {
        $link = DB::table('links')
            ->orderBy('links.created_at', 'DESC')
            ->select('links.*')
            ->where('links.ownerid', '=', Auth::id())
            ->get();
        // dd($link);
        // $getid =  auth()->user()->id;
        $opt = DB::table('optionaldbs')
            ->select('optionaldbs.*')
            ->where('optionaldbs.userid', '=', auth()->user()->id)
            ->orderBy('optionaldbs.created_at', 'DESC')
            ->first();
        return view('dashboard.content.home', ['link' => $link, 'opt' => $opt]);
        // return view('dashboard.content.home');
    }
    public function appearance()
    {
        $getid =  auth()->user()->id;
        $opt = DB::table('optionaldbs')
            ->select('optionaldbs.*')
            ->where('optionaldbs.userid', '=', $getid)
            ->orderBy('optionaldbs.created_at', 'DESC')
            ->first();
        return view('dashboard.content.themes', ['opt' => $opt]);
    }
    public function addlink(Request $request)
    {
        $link = new linkDB();
        $link->title = $request->title;
        $link->link = $request->linkurl;
        $link->view = '0';
        $link->favorites = '0';
        $link->ownerid = auth()->user()->id;
        $link->save();
        return back()->with('selesai', 'Successfull add new links');
    }
    public function updatelink(Request $request, $id)
    {
        $link = linkDB::find($id);
        $link->title = $request->title;
        $link->link = $request->linkurl;
        $link->view = '0';
        $link->favorites = '0';
        $link->save();
        return back()->with('selesai', 'Successfully update your links data');
    }
    public function deletelink($id)
    {
        $link = linkDB::find($id);

        if ($link) {
            if ($link->delete()) {

                DB::statement('ALTER TABLE links AUTO_INCREMENT = ' . (count(linkDB::all()) + 1) . ';');

                return back()->with('selesai', 'Link successfully deleted.');
            }
        }
    }

    public function settings()
    {
        return view('dashboard.content.settings');
    }

    public function addinformations(Request $request, $id)
    {
        $add = User::find($id);
        $add->titlepage = $request->titlepage;
        $add->instagram = $request->instagram;
        $add->twitter = $request->twitter;
        $add->facebook = $request->facebook;
        $add->save();
        return back()->with('selesai', 'Successfully complete your page informations.');
    }
}
