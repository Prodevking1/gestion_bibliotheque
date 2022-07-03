@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Modification</div>
  <div class="card-body">
      <form action="{{ url('editeurs/' .$editeurs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$editeurs->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="titre" id="id" value="{{$editeurs->titre}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection