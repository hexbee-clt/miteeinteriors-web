<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\projects;
use App\Models\admin\projectsimages;
use Auth;
use Toastr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function view(Request $request){
        
        return view('admin.project-form');
    }
    public function save(Request $request){
        // dd($request);
        // $rules = [
        //     'file'=>'required|dimensions:min_width=329,min_height=451',
        // ];

        // $customMessages = [
        //     'file.required' => "Choose a image",
        //     'file.dimensions' => "Image must be minimum 329X451",
        // ];
        // $this->validate($request, $rules, $customMessages);


        if($request->hasfile('file')){
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extension;
            $destinationPaths = ('admin/uploads/project') ;
            $file->move('admin/uploads/project',$filename);
        }else{
        } 
        $data = new projects();
        $data->title= $request->title;
        $data->url= $request->url;
        $data->type= $request->type;
        $data->contant= $request->description;
        $data->file = $filename;
        $data->location = 'admin/uploads/project/';
        toastr()->success('Project Created successfully!');
        $data->save();
            return back();
    }
    public function list(Request $request){
        $projects = projects::all();
        return view('admin.project-list',['projects'=>$projects]);
    } 
    public function distroy(Request $request,$id){
        $data = DB::table('projects')->where('id',$id)->delete();
        toastr()->success('Deleted successfully!');
        return redirect()->back();
    }
    public function collect(Request $request,$id){
        
        $projects = projectsimages::all();
        return view('admin.add-images',['project'=>$projects]);
    }
    public function image_save(Request $request){
        // dd($request);

 if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extension;
            $destinationPaths = ('admin/uploads/projectimage') ;
            $file->move('admin/uploads/projectimage',$filename);
        }else{
        } 

        $data = new projectsimages();
        $data->projectid= $request->id;
        $data->url= $request->url;
        $data->type= $request->type;
        $data->path = 'admin/uploads/projectimage/';
        $data->file = $filename;
        $data->save();
            return back();

    }
    public function distroyimage(Request $request,$id){
        
        $data = DB::table('projectsimages')->where('id',$id)->delete();
        toastr()->success('Deleted successfully!');
        return redirect()->back();
    }
    public function edit(Request $request,$id){
        $data = DB::table('projects')->where('id',$id)->get();
        return view('admin.project-form-edit',['data'=>$data]);

    }
    public function update(Request $request,$id){
        if($request->hasfile('file')){
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extension;
            $destinationPaths = ('admin/uploads/project') ;
            $file->move('admin/uploads/project',$filename);
        }else{
            $filename=$request->file;
            $location=$request->location;
        } 
        
        $data = projects::find($id);
        $data->title= $request->title;
        $data->url= $request->url;
        $data->type= $request->type;
        $data->contant= $request->description;
        $data->file = $filename;
        $data->location = 'admin/uploads/project';
        $data->save();
        toastr()->success('successfully Updated');
            return back();
    }
}
