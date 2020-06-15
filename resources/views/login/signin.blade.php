@extends('login.master')
@section('title','Login')
@section('content')
<div class="form-holder">
   <div class="form-content">
      <div class="form-items">
         <h3>Login to account</h3>
         <p>Login to your Branchlink.in admin</p>
         <form action="/login" method="POST">
            @csrf
            <input class="form-control" type="text" name="username" placeholder="Username" required>
            <input class="form-control" type="password" name="password" placeholder="Password" required>
            <div class="form-button">
               <button id="submit" type="submit" class="ibtn">Login</button> <a href="/register">Don't have an
                  account?</a>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection