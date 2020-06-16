@extends('login.master')
@section('title','Register')
@section('content')
<?php $tokens =  bin2hex(openssl_random_pseudo_bytes(64));?>
<div class="form-holder">
   <div class="form-content">
      <div class="form-items">
         <h3>Register account</h3>
         <p>Sign up for your Branchlink.in account</p>
         @if(count($errors)>0)
         @foreach ($errors->all() as $error)
         <div class="form-row">
            <div class="col-md-12">
               <div class="alert alert-danger alert-dismissible fade show" id="alert-success" role="alert">
                  {{$error}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
            </div>
         </div>
         @endforeach
         @endif
         <form action="/register-data/{{$tokens}}" method="POST">
            {{ csrf_field() }}
            <input class="form-control" type="text" name="name" placeholder="Your Name" required>
            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
            <input class="form-control" type="username" name="username" placeholder="Username" required>
            <input class="form-control" id="password" type="password" name="password" placeholder="Password" required
               pattern=".{8,}">
            <input class="form-control" id="confirm_password" type="password" name="confirm_password"
               placeholder="Confirm your password" required pattern=".{8,}">
            <div class="form-button">
               <button id="submit" type="submit" class="ibtn">Register</button> <a href="/login">Already have an
                  account?</a>
            </div>
         </form>
      </div>
   </div>
</div>
<script>
   var password = document.getElementById("password"),
      confirm_password = document.getElementById("confirm_password");

   function validatePassword() {
      if (password.value != confirm_password.value) {
         confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
         confirm_password.setCustomValidity('');
      }
   }

   password.onchange = validatePassword;
   confirm_password.onkeyup = validatePassword;
</script>
@endsection