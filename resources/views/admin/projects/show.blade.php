@extends('layouts.admin')

@section('content')
    <h1>{{$project->name}}</h1>

    <div>
        <strong>Id</strong>: {{ $project->id }}
    </div>
    <div>
        <strong>Slug</strong>: {{ $project->slug }}
    </div>
    
    <div>
        {{-- se client_name c'è allora stampa client_name, altrimenti stampa 'empty' --}}
        <strong>Client name</strong>: {{ $project->client_name ? $project->client_name : 'empty' }}
    </div>
    
    <div>
        <strong>Summary</strong>: {{ $project->summary ? $project->summary : 'empty' }}
    </div>
    
    <div>
        <strong>Created at</strong>: {{ $project->created_at }}
    </div>
    
    <div>
        <strong>Updated at</strong>: {{ $project->updated_at }}
    </div>    
    
    
@endsection