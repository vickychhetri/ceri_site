@extends('Layout')
@section('title','Add New Video')
              
@section('headercontainer')
<script src="https://cdn.tiny.cloud/1/uexftexa1nd9vm3g5etjqnvxuwzl81h6mupdug7yukqcnvoh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
<style>
.adminulist{
    padding:4px;
    background-color:white;
}
.adminulist:hover {
    background-color:blue;
    color:white;
}


</style>      

@endsection 
@section('container')
 
<div class="container" >

<form method="post" action="savelatestnews" enctype="multipart/form-data"> 
{{csrf_field()}}
<div class="row" style="padding:50px;">
<h2> Add Latest News</h2>

 <table class="table">
 <tr>
 <td>
 <p> Page Name {for Google and other search engine( Only space and alphabets allowed)}  </p>
 <input type="text" class="form-control" name="PageName"/>
 <span style="color:red;">
 @error('PageName')
 {{$message}}
 @enderror
 </span>
 </td>
 </tr>
 <tr>
 <td>
 <p> Title  </p>
 <input type="text" name="title" class="form-control" />
 <span style="color:red;">
 @error('title')
 {{$message}}
 @enderror
 </span>
 </td>
 </tr>
 
 <tr>
 <td>
 <p> Image   </p>
 <input type="file" name="thumbnailimage" class="form-control" />
 <span style="color:red;">
 @error('thumbnailimage')
 {{$message}}
 @enderror
 </span>
 </td>
 </tr>
 


 <tr>
 <td>
 <p> Short-Description (for website and search engine description ) </p>
  <textarea name="shortdescription" class="form-control" style="height:100px;"></textarea>
  <span style="color:red;">
 @error('shortdescription')
 {{$message}}
 @enderror
 </span>
 </td>
 </tr>

 <tr>
 <td>
 <p> Event Date </p>
  <input type="date" name="eventdate" class="form-control" required/>
  <span style="color:red;">
 @error('eventdate')
 {{$message}}
 @enderror
 </span>
 </td>
 </tr>

 
 
 <tr>
 <td>
 <p> Long-Description </p>
  <textarea  id="mytextarea" name="mytextarea" class="form-control" style="height:500px;"></textarea>
  <span style="color:red;">
 @error('mytextarea')
 {{$message}}
 @enderror
 </span>
 </td>
 </tr>
 
 <tr>
 <td>
 <input type="submit" class="btn btn-success btn-block" value="POST"/>
 </td>
 </tr>

 </table>

</div>
</form>
</div>
@endsection