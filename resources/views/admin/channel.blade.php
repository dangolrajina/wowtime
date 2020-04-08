@extends('admin.app')
@section('content')
 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Channels</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            	
              <a class="btn btn-primary" href="/admin/channel/create">Add Channel</a>
      
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>S.N</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                 
                    
                  <tbody>
                   @foreach($channels as $key => $channel)
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $channel->title }}</td>
                      <td><img src="/storage/{{ $channel->image }}" alt="" height="200px"></td>
                      <td>{{ $channel->description }}</td>
                      <td style="display: flex">
                      	<a class="btn btn-success" href="/admin/channel/edit/{{ $channel->id }}">Edit</a>
                      	<form method="post" action="/admin/channel/delete/{{ $channel->id }}">
                      		@csrf
                      		@method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                  </td>
                      
                    </tr>
                   @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

@endsection