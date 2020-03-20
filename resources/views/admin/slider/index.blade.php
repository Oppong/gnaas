@extends('admin.adminpage')



@section('admin')


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Slider</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        
          <a href="{{route('slider.create')}}" type="button" class="btn btn-sm btn-outline-success">
            Create Slider
          </a>
        </div>
      </div>

      <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>TITLE</th>
              <th>CONTENT</th>
              <th>IMAGE</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>

        @foreach($sliders as $slider)
            <tr>
              <td>{{$slider->id}}</td>
              <td>{{$slider->title}}</td>
              <td>{{$slider->content}}</td>
              <td><img src="{{$slider->getFirstMediaUrl('images')}}" alt="" class="img-fluid" width="50" height="50" style="border-radius: 100%;"></td>
              <td>
              <a href="{{ route('slider.edit', $slider->id)}}" class=" px-2">Edit</a>
              <a href="{{ route('slider.show', $slider->id)}}" class="text-success px-2">View</a>
              <form action="{{ route('slider.destroy', $slider->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" class="text-danger" value="Delete">
              </form> 
              </td>
            </tr>
        @endforeach
          </tbody>
        </table>
      </div>
    </main>
@endsection