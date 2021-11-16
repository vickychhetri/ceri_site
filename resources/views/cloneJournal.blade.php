@extends('Layout')

@section('title', ' Cloned Journals | Centre Of Excellence For Research & Innovation')
@section('container')


<div class="container-fluid"  >
      

      <div class="row tm-welcome-row" >
        <div class="col-12 tm-page-cols-container" >
           
        <x-bodyna/>

          <div class="tm-page-col-right" style="padding-left: 16px;padding-right: 16px;padding-top: 0px;padding-bottom: 0px;border-left: 2px solid #ebe8e1;padding-bottom: 0;">
          <div class="row" style="" >

             
            
            <div class="col-md-12" style="padding: 16px;color: black;" >

     <center>           <x-lgoist />  <h2> Cloned Journals </h2> </center>
           <table class="table">
    <thead class="thead-dark" style="background-color:black;">
      <tr>
        <th>Sr. No</th>
        <th>Journals</th>
      
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.)</td>
        <td> <a href="https://ugccare.unipune.ac.in/Apps1/User/Web/CloneJournals" class="btn btn-info"> List of cloned journals Group I</a> </td>
       
      </tr>
      <tr>
         <td>2.)</td>
        <td> <a href="https://ugccare.unipune.ac.in/Apps1/User/Web/CloneJournalsGroupII" class="btn btn-info"> List of cloned journals Group II </a> </td>
       
       
      </tr>
  
    </tbody>
  </table>
   
            
          </div>
         
          </div>
        </div>
      </div>
 

 
    </div>

    @endsection
