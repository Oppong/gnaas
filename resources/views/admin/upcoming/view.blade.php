@extends('admin.adminpage')



@section('admin')

<div class="col-md-9 ml-sm-auto col-lg-10 px-4 py-5 bg-white" style="margin-top: 30px;">

    <h6>Title for upcoming post: <span class="text-muted">{{$upcoming->title}}</span></h6>
    <br>
    <h6>Content for upcoming post: <span class="text-muted">{{$upcoming->body}}</span></h6>
    <br>
    <h6>Image for the upcoming Event</h6>
    <img src="{{$upcoming->getFirstMediaUrl('upcoming')}}" alt="" class="img-fluid img-thumbnail" width="30%" height="30%">

    
<br>
<a href="{{route('upcoming.create')}}" class="btn btn-outline-success btn-sm "> Create upcoming</a>
<a href="{{route('upcoming.index')}}" class="btn btn-outline-info btn-sm"> Go Back to listing</a>

</div>






@endsection