<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\contacts;
use Auth;
use Toastr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    
    public function view(Request $request){
        $contact = Contacts::all();
        return view('admin.contacts',['contact'=>$contact]);

    }
    public function save(Request $request){
        // dd($request);
        // $this->validate($request, $rules, $customMessages);
        
            $data = new Contacts;
            $data->name= $request->firstName;
            $data->second_name= $request->lastName;
            $data->email= $request->email;
            $data->phonenumber= $request->phone;
            $data->message= $request->message;
            $data->updated_at=date('Y-m-d H:i:s');
            $data->created_at=date('Y-m-d H:i:s');
            $data->save();
            Toastr::success('Successfully Sent', 'Contact Us');
            // return redirect()->back()->with('message', 'IT WORKS!');
            return redirect()->back();
        }
        public function distroy(Request $request,$id){
            $data = DB::table('contacts')->where('id',$id)->delete();
            return redirect()->back();
        }
    
}
