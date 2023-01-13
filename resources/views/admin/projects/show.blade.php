@extends('layouts.admin')

@section('content')

<div class="top_content d-flex">
    <h1 class="py-3">Project {{$project->title}}</h1>
</div>

@if($project->cover_img)
<img class="img-fluid" src="{{asset('storage/' . $project->cover_img)}}" alt="">
@endif
<h4>Project title: </h4>
<p>{{$project->title}}</p>
<h4>Project slug: </h4>
<p>{{$project->slug}}</p>
<h4>Project description: </h4>
<p>{{$project->description}}</p>

</div>

@endsection