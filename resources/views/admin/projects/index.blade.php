@extends('layouts.admin')

@section('content')

<div class="top_content d-flex">
    <h1 class="py-3">Projects</h1>
    <a href="{{route('admin.projects.create')}}" class="btn btn-primary ms-auto align-self-center">Add Project</a>
</div>

@if(session('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    <strong>{{session('message')}}</strong>
</div>
@endif

<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>slug</th>
                <!-- <th>description</th> -->
                <th>actions</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse($projects as $project)
            <tr class="table-primary">
                <td scope="row">{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <!-- <td>{{$project->description}}</td> -->
                <td>
                    <a class="btn btn-primary" href="{{route('admin.projects.show', $project->slug)}}"><i
                            class="fa-solid fa-eye"></i></a>
                    <a class="btn btn-warning" href="{{route('admin.projects.edit', $project->slug)}}"><i
                            class="fa-solid fa-pencil"></i></a>
                    <form class="d-inline" action="" method="post">
                        <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <h3>No projects on database yet</h3>
            @endforelse
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>

@endsection