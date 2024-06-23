@extends('layouts.admin')

@section('content')
  <h1>Projects</h1>  

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Client name</th>
        <th scope="col">Summary</th>
        <th scope="col">Created at</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
      <tr>
        <td>{{$project->id}}</td>
        <td>{{$project->name}}</td>
        <td>{{$project->client_name}}</td>
        <td>{{$project->created_at}}</td>
        <td>{{$project->created_at}}</td>
        <td>pulsanti</td>
      </tr>
      @endforeach  
    </tbody>
  </table>
@endsection