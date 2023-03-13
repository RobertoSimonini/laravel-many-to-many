@extends('layouts.app')

@section('title', 'Edit')

@section('content')
<body class="bg-dark">
    
    <div class="container my-5">
        
        <header class="my-5">
            <h1 class="text-center text-danger">
                Edit an existing project
            </h1>
        </header>
        
        @include('includes.form')

    </div>
</body>

@endsection

