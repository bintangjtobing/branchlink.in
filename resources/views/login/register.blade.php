@extends('login.master')
@section('title','Register')
@section('content')
<div class="form-holder">
   <div class="form-content">
      <div class="form-items">
         <h3>Register account</h3>
         <p>Sign up for your Branchlink.in account</p>
         <form action="/register-data" method="GET">
            {{ csrf_field() }}
            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
            <input class="form-control" type="username" name="username" placeholder="Username" required>
            <input class="form-control" id="pass" type="password" name="password" placeholder="Password" required>
            <input class="form-control" id="pass_confrm" type="password" name="confirm_password"
               placeholder="Confirm your password" required>
            <div class="form-button">
               <button id="submit" type="submit" class="ibtn">Register</button> <a href="/login">Already have an
                  account?</a>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection