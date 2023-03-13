@extends('layouts.app')

@section('title', 'Details')

@section('content')
<body class="bg-dark">

<header>
    <h1 class="text-success text-center my-5"> 
        {{$project->title}}
    </h1>
</header>


<div class="container">

    {{-- Card --}}
    <div class="card h-100 mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{asset('storage/' . $project->image)}}" class="img-fluid rounded-start h-100" alt="...">
          </div>
          <div class="col-md-8 text-center">
            <div class="card-body">
              <h2 class="card-title mb-4">{{$project->title}}</h2>
              <h4 class="mb-3">Project Description:</h4>
              <p class="card-text">{{$project->description}}</p>
              <h4 class="mb-3">Techonolgies:</h4>
              <p class="card-text">{{$project->techonologies_used}}</p>
              @if ($project->type)
              <h4 class="mb-3">Type</h4>
              <span class="badge text-bg-dark">{{$project->type->name}}</span>
              @endif
            </div>
          </div>
        </div>
      </div>

      {{-- Bottoni di redirect  --}}
      <div class="buttons mt-3 d-flex justify-content-between">
          <a href="{{$project->full_code}}" class="btn btn-success me-2">View full code</a>

          <div class="d-flex">
            <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning text-white me-2"><i class="fa-solid fa-pencil"></i> Edit</a>
            
            <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" class="me-2 deleteForm">
              @method('DELETE')
              @csrf
              
              <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Remove</button>
            </form>
            <a href="{{url('admin/projects') }}" class="btn btn-secondary"><i class="fa-solid fa-rotate-left"></i> Back</a>
          </div>
      </div>
</div>

</body>
@endsection

@section('scripts')
        
@endsection