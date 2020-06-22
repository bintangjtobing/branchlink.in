<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\linkDB;
use Auth;

class LinksController extends Controller
{
    public function index()
    {
        $link = DB::table('links')
            ->orderBy('links.created_at', 'DESC')
            ->select('links.*')
            ->get();
        // dd($link);
        return view('dashboard.content.home', ['link' => $link]);
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
    public function appearance()
    {
        return view('dashboard.content.themes');
    }
    public function settings()
    {
        return view('dashboard.content.settings');
    }
}
