@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Modification</div>
  <div class="card-body">
      <form action="{{ url('categories/' .$categories->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$categories->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="titre" id="id" value="{{$categories->titre}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection