@extends('layouts.admin')

@section('content')

<div class="top_content d-flex">
    <h1 class="py-3">Project {{$project->title}}</h1>
</div>

<h4>Project title: </h4>
<p>{{$project->description}}</p>
<h4>Project slug: </h4>
<p>{{$project->description}}</p>
<h4>Project description: </h4>
<p>{{$project->description}}</p>

</div>

@endsection