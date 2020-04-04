<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    

           <!-- Flexing Start -->
          <main class="bg_img">

           <div class="container flex" style="flex-direction: column;
                                              padding: 200px 0px;">
             <div  class="flex" style="justify-content: center;">

            <h1 class="heading">Admin Login</h1>
                <form method="post" action="/adminlogin" >
                    @csrf
                    <div class="">
                        <i class="fa fa-user"></i>
                       <input class="input" type="text" name="email" placeholder="Email" style="margin-bottom: 13px;    padding: 0px 5px;">
                   </div>
                   <div class="">
                    <i class="fa fa-lock"></i>
                       <input class="input" type="password" name="password"placeholder="Password" style="    padding: 0px 5px;">
                   </div>
                   <button type="submit" class="button">Login</button>
               </form>
           </div>
       </div>
   </div>
</main>   
</body>
</html>

