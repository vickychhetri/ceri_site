<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\latestnews;
use Illuminate\Http\Request;

class LatestnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $request->validate([
        'PageName'=>'required',
        'title'=>'required',
        'thumbnailimage'=>'required',
        'eventdate'=>'required',
        'shortdescription'=>'required',
        'mytextarea'=>'required',
    ]);
    $pagename1= strtolower(LatestnewsController::create_slug($request->PageName));
  
    $reDbms= new latestnews;
    $pagenamenewafter="News-".time()."-".$pagename1;
    $reDbms->Pagename=$pagenamenewafter;
    
    $reDbms->Title=$request->title;
    $reDbms->EventDate=$request->eventdate;
    $reDbms->Description=$request->shortdescription;
    $filenamelong=$pagenamenewafter."LatestNews.dat";
    $reDbms->Content=$filenamelong;
    $newImageName= $pagenamenewafter.'-'.time().'.'.$request->thumbnailimage->extension();
    $reDbms->Thumbnail =$newImageName;
    $res=$reDbms->save();

    if($res=="1"){
   Storage::disk('local')->put("/LatestNews/".$filenamelong, $request->mytextarea);
   $request->thumbnailimage->move(public_path('NewsImages'),$newImageName);
      }

      return redirect()->back(); 

    }
public static function create_slug($string){
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\latestnews  $latestnews
     * @return \Illuminate\Http\Response
     */
    public function show(latestnews $latestnews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\latestnews  $latestnews
     * @return \Illuminate\Http\Response
     */
    public function edit(latestnews $latestnews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\latestnews  $latestnews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, latestnews $latestnews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\latestnews  $latestnews
     * @return \Illuminate\Http\Response
     */
    public function destroy(latestnews $latestnews)
    {
        //
    }
}
