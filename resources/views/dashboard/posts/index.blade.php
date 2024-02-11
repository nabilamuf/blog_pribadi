@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, myposts</h1>
  </div>  

  <div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">action </th>
        
        </tr>
      </thead>
      <tbody>
       
          @foreach($posts as $post)
          <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href=""><span data-feather="file-text"></span></a>
          </td>
    
          </tr>
          @endforeach

       
      </tbody>
    </table>
  </div>
@endsection