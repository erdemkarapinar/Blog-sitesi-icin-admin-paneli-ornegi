<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\YazilimAdmin;

class YazilimAdminController extends Controller
{
    public function getAllYazilimAdmin(Request $request)
    {
        $d=YazilimAdmin::all();
        $c=Category::all();
        return view('yazilimadmin.yazilimadmin-all',compact('d','c'));
    }
    public function getCreateYazilimAdmin(Request $request)
    {
        $d=YazilimAdmin::all();
        $c=Category::all();
        return view('yazilimadmin.yazilimadmin-create',compact('c','d'));
    }
    public function postCreateYazilimAdmin(Request $request)
    {
        $d=new YazilimAdmin();
        $d->create($request->all());
        return redirect()->route('admin.getAllYazilimAdmin');    
    }
    public function getEditYazilimAdmin(Request $request)
    {    $d=YazilimAdmin::find($request->id);
        $c=Category::all();
        return view('yazilimadmin.yazilimadmin-update',compact('d','c','request'));   
    }
    public function postEditYazilimAdmin(Request $request)
    {
        $d=YazilimAdmin::find($request->id);
        $d->update($request->all());
        return redirect()->route('admin.getAllYazilimAdmin');
    }
    public function getDeleteYazilimAdmin(Request $request)
    {
        $d=YazilimAdmin::find($request->id);
        $d->delete();
       return redirect()->route('admin.getAllYazilimAdmin');

    }
}