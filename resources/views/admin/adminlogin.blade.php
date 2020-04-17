<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.1">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <main class="bg_img">

   <!-- Flexing Start -->

   <div class="container flex" style="padding: 200px 0px;display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   margin: 0 auto;">
   <h1 class="heading" style="color: white">Admin Login</h1>
   <div  class="flex" style="justify-content: center;">
    <form method="post" action="/admin/login" >
      @csrf
      <div class="">
        <i class="fa fa-user"></i>
        <input class="input" type="text" name="email" placeholder="Email" style="margin-bottom: 13px;    padding: 0px 5px;">
      </div>
      <div class="">
        <i class="fa fa-lock"></i>
        <input class="input" type="password" name="password"placeholder="Password" style="    padding: 0px 5px;">
      </div>
      <div style="padding: 20px 63px;">
       <button type="submit" class="button" style="border-radius: 18px;
       padding: 10px;
       width: 78px;
       border: 1px solid blue;">Login</button>
     </div>
   </form>
 </div>
</div>
</div>
</main>   
</body>
</html>

