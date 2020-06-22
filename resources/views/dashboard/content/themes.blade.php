@extends('dashboard.content.index')
@section('activethemes','active')
@section('content')
<div class="main">
   <div class="notika-status-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
               @if(session('selesai'))
               <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
                  {{session('selesai')}}
               </div>
               @endif
            </div>
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
               <div class="notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                  <h4>Page options</h4>
                  <div class="pageopt">
                     <img class="userimg-profile" src="{{asset('media/'.auth()->user()->avatar)}}"><br>
                     <label for="">Upload Avatar</label>
                     <form action="/add-avatar/{{auth()->user()->id}}" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
                        <input type="file" name="avatar" id="" class="form-control">
                        <button type="submit" class="btn btn-primary btn-block"
                           style="margin-top: 15px;">Upload</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
               <div class="branchlinkshare">
                  <p><b>My branchlink</b> account: <input type="text" id="accountbranchlink"
                        value="https://branchlink.in/{{auth()->user()->username}}" readonly>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection