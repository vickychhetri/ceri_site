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
     <h2> Login </h2>
            <hr/>
            <form method="post" action="CheckLogin">
            {{csrf_field()}}
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form1Example1" name="email" class="form-control" />
    <label class="form-label" for="form1Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="pwd" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="form1Example3"
          checked
        />
        <label class="form-check-label" for="form1Example3"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block">Sign in</button>
</form>


          </div>
         
          </div>
        </div>
      </div>
 

 
    </div>

    @endsection