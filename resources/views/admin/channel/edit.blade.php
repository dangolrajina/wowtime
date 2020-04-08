@extends('admin.app')
@section('content')
<div class="container-fluid">
	 <form method="POST" action="/admin/channel/edit/{{ $channel->id }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label>Title </label>
      <input type="text" class="form-control" name="title" value="{{ $channel->title }}">
    </div>
     <div class="form-group">
      <label>Image</label>
      <input type="file" class="form-control" name="image" >
      <img src="/storage/{{ $channel->image }}" alt="">
    </div>
    <div class="form-group">
      <label>Description</label>
      <input type="text" class="form-control" name="description" value="{{ $channel->description }}">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  @endsection