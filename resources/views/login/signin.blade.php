@extends('login.master')
@section('title','Login')
@section('content')

<div class="form-holder">
   @if(session('sukses'))
   <div class="form-row">
      <div class="my-3 offset-4 col-md-4">
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congratulations!</strong> {{session('sukses')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
      </div>
   </div>
   @endif
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