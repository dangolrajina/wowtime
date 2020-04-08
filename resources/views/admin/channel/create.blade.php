 @extends('admin.app')
@section('content')
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Add Channels</h1>
            <form method="POST" action="/admin/channel/create" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label>Title </label>
      <input type="text" class="form-control" id="" name="title">
    </div>
     <div class="form-group">
      <label>Image</label>
      <input type="file" class="form-control" id="" name="image">
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea type="text" class="form-control" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
          
@endsection