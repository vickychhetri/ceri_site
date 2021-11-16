<?php

namespace App\Http\Controllers;
use App\Models\latestnews;
use Illuminate\Http\Request;

class FullController extends Controller
{
    public function index(){
        $articlelist=latestnews::orderBy('id', 'DESC')->get();
        $storageData=$articlelist;

        return view('home',['alist'=> $storageData]);
    }

    public function showsinglenews($filename){
        $cata= latestnews::where("Pagename",$filename)->get();
        return view('newsdisplay',['datas'=> $cata]);
    }
    public function researchopen(){
        $data=latestnews::Orderby('id', 'desc')->get();;
        return view('research-activities',['datas'=> $data]);
    }
    public function Check(Request $request){

if($request->email=="developer@ctgroup.in" && $request->pwd=="Sonika@1987"){
    echo "done";
    return redirect("/dashboard");
}

    
}
}
