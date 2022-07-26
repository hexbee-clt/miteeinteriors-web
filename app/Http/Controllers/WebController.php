<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;
use Spatie\ResponseCache\Facades\ResponseCache;
use Carbon\Carbon;
use App\Models\admin\gallery;


class WebController extends Controller
{
    
    public function webstore()
    {
        $gallery = DB::table('galleries')->get();
        return view('web.gallery',compact('gallery'));
    }
    public function galleryinner($id)
    {
        $gallery = DB::table('galleries')->where('title',str_replace('-', ' ', $id))->get();
        // dd($gallery);
        return view('web.single-gallery',compact('gallery'));
    }
    public function home()
    {
        $gallery = DB::table('galleries')->take(3)->get();
        return view('web.index',compact('gallery'));
    }
}
