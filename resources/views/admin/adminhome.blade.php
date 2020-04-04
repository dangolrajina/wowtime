<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
    <meta name="viewport" content="initial-scale=1.1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <main class="bg_img">
        
  <form method="post" action="/logout">
    @csrf
    <div>
      <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1" style="color:#89999d">Dashboard</span>
 
        <div class="dropdown">
         <button class="btn btn-secondary dropdown-toggle" style="background-color: #a3c0d9;
    border-color: #a0b4c6;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }} 
        </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="/" style="color:#8ea3b8;" >Logout</a>
          </div>
         </div>
      </nav>
    </div>
    <h1 style="text-align:center; color:#7c96b0">Welcome To <br> Dashboard</h1>
  </form>
</div>
</main>
</body>
</html>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

