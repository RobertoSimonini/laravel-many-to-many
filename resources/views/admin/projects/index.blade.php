@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<body class="bg-dark">
    <div class="container">

        {{-- Title della sezione  --}}
        <h1 class="text-center text-primary my-5">
            My Favourite Projects
        </h1>

        {{-- Cards dei progetti  --}}
        <div class="row g-5">
            @foreach ($projects as $project)
            <div class="col-4">
                <div class="card text-center">
                    <img src="{{asset('storage/' . $project->image)}}" class="card-img-top img-fluid" alt="{{$project->title}}" style="height:300px;">

                    {{-- Contenuto della card  --}}
                    <div class="card-body">
                      <h5 class="card-title">{{$project->title}}</h5>
                      <p class="card-text">Created at: {{$project->created_at}}</p>

                      {{-- Qui inserisco i bottoni  --}}
                      <div class="buttons d-flex justify-content-center">
                        <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary me-2"><i class="fa-solid fa-circle-info"></i> More </a>

                        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning text-white me-2"><i class="fa-solid fa-pencil"></i> Edit</a>

                        <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" class="deleteForm">
                        @method('DELETE')
                        @csrf
                        
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Remove</button>
                        </form>
                      </div>
                      
                    </div>
                  </div>
            </div>
            @endforeach         
        </div>

        {{-- Bottoni di redirect  --}}
        <div class="buttons my-5 d-flex justify-content-center">
            <a href="{{route('admin.projects.create')}}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add a Project</a>
        </div>

    </div>

    @section('scripts')
        
    @endsection

</body>
@endsection