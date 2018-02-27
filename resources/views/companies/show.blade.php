@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="jumbotron p-1 pt-5 px-5 text-white rounded bg-dark">
                <div class="col-md-12 px-0">
                    <h1 class="display-4 font-italic">{{$company->name}}</h1>
                    <p class="lead my-3">{{$company->description}}</p>
                    <p class="lead mb-0">
                    <a href="{{route('companies.edit', $company->id)}}" 
                        class="btn btn-light btn-sm"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;Delete</a>
                        </p>
                </div>
            </div>
            <div class="row mb-2">
                @foreach($company->projects as $project)
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h3 class="mb-0">
                                  <a class="text-dark" href="#">{{$project->name}}</a>
                                </h3>
                                <div class="mb-1 text-muted">Duration (Days): {{$project->days}}</div>
                                <p class="card-text mb-auto">{{$project->description}}</p>
                                <a href="{{route('projects.show', $project)}}">View Project</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!--<aside class="col-md-3">
            <div class="p-3">
                <h4 class="font-italic">Actions</h4>
                <ol class="list-unstyled">
                    <li><a href="#"><i class="fa fa-pencil"></i>&nbsp;Edit</a></li>
                    <li><a href="#"><i class="fa fa-trash"></i>&nbsp;Delete</a></li>
                    <li><a href="#">Add New Member</a></li>
                </ol>
            </div>
          <div class="p-3">
            <h4 class="font-italic">Members</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#"></a></li>
            </ol>
          </div>
        </aside>--><!-- /.blog-sidebar -->
    </div>
@endsection