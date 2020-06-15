<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Branchlink.in | @yield('title')</title>
   <link rel="icon" href="images/icon.png">
   <link rel="stylesheet" type="text/css" href="auth/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="auth/css/fontawesome-all.min.css">
   <link rel="stylesheet" type="text/css" href="auth/css/iofrm-style.css">
   <link rel="stylesheet" type="text/css" href="auth/css/iofrm-theme19.css">
   <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"></script>
</head>

<body>
   <div class="form-body without-side">
      <div class="website-logo">
         <a href="/login">
            <div class="logo">
               <img class="logo-size" src="/auth/images/logo-light.png" alt="Logo Branchlink.in">
            </div>
         </a>
      </div>
      <div class="row">
         <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
               <img src="auth/images/graphic3.svg" alt="">
            </div>
         </div>
         @yield('content')

      </div>
   </div>
   <script src="auth/js/jquery.min.js"></script>
   <script src="auth/js/popper.min.js"></script>
   <script src="auth/js/bootstrap.min.js"></script>
   <script src="auth/js/main.js"></script>
</body>

</html>