@extends('Layout')

@section('title', 'Research and Development Activities | Centre Of Excellence For Research & Innovation')
@section('container')


<div class="container-fluid"  >
      

      <div class="row tm-welcome-row" >
        <div class="col-12 tm-page-cols-container" >
           
        <x-bodyna/>

          <div class="tm-page-col-right" style="padding-left: 16px;padding-right: 16px;padding-top: 0px;padding-bottom: 0px;border-left: 2px solid #ebe8e1;padding-bottom: 0;">
          <div class="row" style="" >

             
            
            <div class="col-md-12" style="padding: 16px;color: black;" >

     <center>          <x-lgoist />  </center>
     <div  style="height:700px;overflow:scroll;">
<h2> Research Activities </h2>
<hr/>
     @foreach($datas as $data)
<ul style="list-style-type:none;">
    <li style=""  class="listiconactivities"   > <a href="/News/{{$data->Pagename}}"  style="color:white;">  
    <?php
     $newtime = strtotime($data->EventDate);
     $datnew = date('M d, Y',$newtime);

     ?>
     <b> <?php echo $datnew; ?> </b> : 
     <p style="text-align:justify;font-family:times new roman;font-size:17px;">
          {{$data->Title}}
     </p>
    
     
     </a>  </li>
</ul>
          @endforeach
</div>  
          </div>
         
          </div>
        </div>
      </div>
 

 
    </div>

    @endsection