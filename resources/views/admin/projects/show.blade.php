@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Project page</h2>
            <div class="content-project m-5">
                <label><h5>Title:</h5></label>
                {{-- MOSTRO IL TITOLO --}}
                <p>{{$project->title}}</p>
                <label><h5>Types</h5></label>
                <p>{{$project->type ? $project->type->name : 'Uncategorized'}}</p>
                <label><h5>Content:</h5></label>
                {{-- MOSTRO IL CONTENUTO --}}
                <p>{{$project->content}}</p>
            </div>
        </div>
    </div>
</div>
@endsection