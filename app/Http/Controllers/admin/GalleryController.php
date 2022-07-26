<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Toastr;
use Auth;
use Spatie\ResponseCache\Facades\ResponseCache;
use Carbon\Carbon;
use App\Models\admin\gallery;

class GalleryController extends Controller
{
    public function store(Request $request  ){
        
        $gallery = new gallery();
       
        if($request->hasfile('file')){
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extension;
            $destinationPaths = ('admin/blog/uploads/news/') ;
            $file->move('admin/uploads/',$filename);
        }else{
            // return $request;
            // $highlights->image = '';
        } 
            $gallery->title = $request->input('title');
            $gallery->image = $filename;
            $gallery->urls = $request->input('url');
            $gallery->content = $request->input('description');
            $gallery->category = $request->input('category');
            toastr()->success('Data has been saved successfully!');
            $gallery->save();
            return back();
    }
    public function view(){
        
        $gallery = DB::table('galleries')->get();
        return view('admin/view-gallery',compact('gallery'));

    }
    public function edit($id){
        $gallery = DB::table('galleries')->where('id',$id)->get();
        return view('admin/edit-gallery',compact('gallery'));

    }
    public function update(Request $request,$id){        
    //    dd($request);
        if($request->hasfile('file')){
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extension;
            $destinationPaths = ('admin/blog/uploads/news/') ;
            $file->move('admin/uploads/',$filename);
        }else{
            // return $request;
            // $highlights->image = '';
        } 
        $gallery = gallery::find($id);
        $gallery->title = $request->input('title');
        $gallery->image = $filename;
        $gallery->urls = $request->input('url');
        $gallery->content = $request->input('description');
        $gallery->category = $request->input('category');
        $gallery->save();
        return redirect('view-gallery');

    }
    public function delete($id){
        $gallery = DB::table('galleries')->where('id',$id)->delete();
        return back();
    }
}
