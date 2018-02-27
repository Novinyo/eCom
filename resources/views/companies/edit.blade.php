@extends('layouts.app')
@section('content')

<div class="col-md-8 m-auto">
    <div class="card">
        <div class="card-header">
            Edit Company
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$company->name}}</h5>
            <form method="POST" action="{{route('companies.update', $company->id)}}">
                @csrf
                {{method_field('PUT')}}
                <div class="form-group">
                    <label class="label" for="name">Company Name</label>
                    <input type="text" class="form-control form-control-sm" 
                      spellcheck="false" name="name" required
                      placeholder="Company name" value="{{$company->name}}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control form-control-sm" spellcheck="false" 
                      name="description" rows="3">
                        {{$company->description}}    
                    </textarea>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
            </form>
        </div>
    </div>
</div>
@endsection