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
   <h1 class="heading">User Register</h1>
   <div  class="flex" style="justify-content: center;">
    <form method="post" action="/registration">

                   <!--@if ($errors->any())
                         <div class="alert alert-danger">
                            <ul style="color:#d3c0c0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                             </ul>
                         </div>
                         @endif-->

                         @csrf
                         <div class="form-group @error('name') has-error @enderror">
                          <i class="fa fa-user"></i>
                          <input class="input" type="text" name="name" placeholder="Username" style="margin-bottom: 13px;   padding: 0px 5px;">
                          @error('name')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group @error('email') has-error @enderror">
                          <i class="fa fa-envelope" style="font-size: 12px"></i>
                          <input class="input" type="text" name="email" placeholder="Email" style="margin-bottom: 13px;  padding: 0px 5px;">
                          @error('email')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group @error('password') has-error @enderror">
                          <i class="fa fa-lock"></i>
                          <input class="input" type="password" name="password" placeholder="Password" style="margin-bottom: 13px;  padding: 0px 5px;">
                          @error('password')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror

                        </div>
                        <div class="form-group @error('password') has-error @enderror">
                          <i class="fa fa-lock"></i>
                          <input class="input" type="password" name="password" placeholder="Confirm Password" style="    padding: 0px 5px;">
                          @error('password')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div style="padding: 20px 63px;">
                         <button type="submit" class="button" style="border-radius: 18px;
                         padding: 10px;
                         width: 78px;
                         border: 1px solid blue;">Register</button>
                       </div>
                       
                     </form>
                   </div>
                 </div>
               </div>
             </main>   
           </body>
           </html>