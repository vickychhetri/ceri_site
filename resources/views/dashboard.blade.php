@extends('Layout')

@section('title', 'Home | CERI')
@section('container')


<div class="container-fluid"  >
      

      <div class="row tm-welcome-row" >
        <div class="col-12 tm-page-cols-container" >
           
        <x-bodyna/>

          <div class="tm-page-col-right" style="padding-left: 16px;padding-right: 16px;padding-top: 0px;padding-bottom: 0px;border-left: 2px solid #ebe8e1;padding-bottom: 0;">
          <div class="row" style="" >

             
            
            <div class="col-md-12" style="padding: 16px;color: black;" >

     <center>  <img src="Images/ceriicon.png" />   </center>
     <h2> Dash-board </h2>
            <hr/>

<table class="table">
<tr>
<td>
<a href="Add-News" class="btn btn-primary"> Add Latest News </a>
</td>
<td>
<a href="Add-News" class="btn btn-danger"> Logout </a>
</td>
</tr>
</table>


          </div>
         
          </div>
        </div>
      </div>
 

 
    </div>

    @endsection