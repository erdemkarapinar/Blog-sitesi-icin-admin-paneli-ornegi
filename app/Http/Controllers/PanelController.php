<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function getPanel(Request $request)
    {
        return view('admin.panel');
    }
}
