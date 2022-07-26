<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin\projects;
use App\Models\admin\projectsimages;
use Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function view(Request $request ){
        
        $projects = projects::all();
        // dd($projects);
        return view('web.projects',['projects'=>$projects]);
    }
    public function viewid(Request $request,$id){
        $data = DB::table('projects')->where('url',$id)->get();
        $ids = DB::table('projects')->where('url',$id)->get('id');
        // dd($ids);
        foreach ($ids as $items) {
            $pid=$items->id;
        }
        $ids = DB::table('projectsimages')->where('projectid',$pid)->get();
        $count=projects::where('id',$id)->count();
        $recentprojects = DB::table('projects')->latest('created_at')->get();
        // dd($recentprojects);
        return view('web.projects-inner',compact('data','ids','count','recentprojects'));

    }
}
