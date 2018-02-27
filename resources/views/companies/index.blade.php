@extends('layouts.app')
@section('content')
<div class="card" style="">
  <div class="card-header bg-transparent border-success">
  <div class="row">
    <div class="col-md-10 col-sm-12">Companies</div>
    <div class="col-md-2 text-md-right col-sm-12 text-sm-center">
      <button class="btn btn-outline-secondary btn-sm btn-block">
          <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;New Company</button>
    </div>
  </div>
</div>
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                      <td>{{$company->name}}</td>
                      <td>{{$company->description}}</td>
                      <td><a class="btn btn-secondary btn-sm"  href="{{route('companies.show', $company->id)}}"><i class="fa fa-pencil"></i>&nbsp;Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
      {{ $companies->links() }}
    </div>
  </div>
@endsection