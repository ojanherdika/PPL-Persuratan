<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index(Request $request){
        // $items= TravelPackage::all();
        return view('pages.admin.surat.index');
    }

}