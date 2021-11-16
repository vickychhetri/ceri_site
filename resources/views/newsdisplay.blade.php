@extends('Layout')

@section('title',$datas[0]->Title)
@section('container')


<div class="container-fluid"  >
      

      <div class="row tm-welcome-row" >
        <div class="col-12 tm-page-cols-container" >
           
        <x-bodyna/>

          <div class="tm-page-col-right" style="padding-left: 16px;padding-right: 16px;padding-top: 0px;padding-bottom: 0px;border-left: 2px solid #ebe8e1;padding-bottom: 0;">
          <div class="row" style="" >

             
            
            <div class="col-md-12" style="padding: 16px;color: black;" >

     <center>           <x-lgoist /> </center>
<br/>
     <h3 style="background-color:#0388fc;color:white;padding:32px;box-shadow: -4px 10px 66px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: -4px 10px 66px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -4px 10px 66px 0px rgba(0,0,0,0.75);border-radius: 25px;"> <b>    {{$datas[0]->Title }}  </b> </h3>
     <hr/>

     <div class="row">
     <div class="col-md-6">
     <center> <img src="/NewsImages/{{$datas[0]->Thumbnail}}" style="max-width:100%;box-shadow:5px 10px #888888;" class="img-responsive"/>   </center>
        
     </div>
     <div class="col-md-6">
     <p style="padding:16px;">
     <?php
     $newtime = strtotime($datas[0]->EventDate);
     $datnew = date('M d, Y',$newtime);



     ?>
     <p style="text-align:center;"> <b> <img src="/img/location_news.png" style="height:50px;" />CERI - {{$datnew}} </b> : 
     <?php
     $des=$datas[0]->Description;
     ?>
     {{$des}}  
     </p>
     </div>
     </div>
      <?php
     $r=Storage::disk('local')->get("/LatestNews/".$datas[0]->Content);
    
    ?>  
 <br/> <br/>
<?php 
echo $r;
?>
    


        
          </div>
         
          </div>
        </div>
      </div>
 

 
    </div>

    @endsection
