@extends('admin.adminpage')



@section('admin')


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Upcoming Events</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

          <a href="{{route('upcoming.create')}}" type="button" class="btn btn-sm btn-outline-success">
            Create Event
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

        @foreach($upcomings as $upcoming)
            <tr>
              <td>{{$upcoming->id}}</td>
              <td>{{$upcoming->title}}</td>
              <td>{{Str::limit($upcoming->body, 50)}}</td>
              <td><img src="{{$upcoming->getFirstMediaUrl('upcoming')}}" alt="" class="img-fluid" width="50" height="50" style="border-radius: 100%;"></td>
              <td>
              <a href="{{ route('upcoming.edit', $upcoming->id)}}" class=" px-2">Edit</a>
              <a href="{{ route('upcoming.show', $upcoming->id)}}" class="text-success px-2">View</a>
              <form action="{{ route('upcoming.destroy', $upcoming->id)}}" method="post">
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
