@extends('admin.adminpage')



@section('admin')

<div class="col-md-9 ml-sm-auto col-lg-10 px-4 py-5 bg-white" style="margin-top: 30px;">

    <h6>Title for slider post: <span class="text-muted">{{$slider->title}}</span></h6>
    <br>
    <h6>Content for slider post: <span class="text-muted">{{$slider->content}}</span></h6>
    <br>
    <h6>Image for the slider</h6>
    <img src="{{$slider->getFirstMediaUrl('images')}}" alt="" class="img-fluid img-thumbnail" width="30%" height="30%">

    
<br>
<a href="{{route('slider.create')}}" class="btn btn-outline-success btn-sm "> Create Slider</a>
<a href="{{route('slider.index')}}" class="btn btn-outline-info btn-sm"> Go Back to listing</a>

</div>






@endsection