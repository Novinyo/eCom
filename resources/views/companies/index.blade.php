@extends('layouts.app')
@section('content')
<div class="card" style="">
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                      <th scope="row">1</th>
                      <td>{{$company->name}}</td>
                      <td>{{$company->description}}</td>
                      <td>@mdo</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
      {{ $companies->links() }}
    </div>
  </div>
@endsection