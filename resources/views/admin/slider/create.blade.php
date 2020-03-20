@extends('admin.adminpage')

@section('admin')


<div class="col-md-9 ml-sm-auto col-lg-10 px-4 py-5" style="margin-top: 30px;">


<form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">

    @csrf
    
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeeholder="title for slider" class="form-control">
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" name="content" id="content" placeeholder="content for slider" class="form-control">
    </div>

    <br>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <br>

    <input type="submit" class="btn btn-success" value="Save and go Back">
    <a href="{{route('slider.index')}}" class="btn btn-info"> Go Back to listing</a>

    <br>

@if($errors->any())

<div class="alert alert-danger">
  <ul>
     @foreach($errors->all() as $error)
         <li>{{ $error}}</li>
     @endforeach
  </ul>
</div>
@endif

</form>


</div>



@endsection