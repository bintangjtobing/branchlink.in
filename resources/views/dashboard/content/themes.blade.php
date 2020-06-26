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
                  <h3>Page options</h3>
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
               <div class="notika-shadow sm-res-mg-t-50 tb-res-mg-t-50">
                  <div class="pageopt">
                     <h3>Page Informations</h3>
                     <form action="/add-pageinformations/{{auth()->user()->id}}" enctype="multipart/form-data"
                        method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                           <label>Title page</label>
                           <div class="nk-int-st">
                              <input type="text" class="form-control input-sm" value="{{auth()->user()->titlepage}}"
                                 name="titlepage" placeholder="Enter title page" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label>Email</label>
                           <div class="nk-int-st">
                              <input type="text" class="form-control input-sm" value="{{auth()->user()->email}}"
                                 name="email" placeholder="Enter email" required>
                           </div>
                        </div>
                        <h3>Social links</h3>
                        <div class="form-group ic-cmp-int">
                           <div class="form-ic-cmp">
                              <i class="notika-icon notika-facebook"></i>
                           </div>
                           <div class="nk-int-st">
                              <input type="text" name="facebook" class="form-control"
                                 placeholder="facebook.com/yourusername" value="{{auth()->user()->facebook}}" required>
                           </div>
                        </div>
                        <div class="form-group ic-cmp-int">
                           <div class="form-ic-cmp">
                              <i class="notika-icon notika-instagram"></i>
                           </div>
                           <div class="nk-int-st">
                              <input type="text" name="instagram" class="form-control"
                                 placeholder="instagram.com/yourusername" value="{{auth()->user()->instagram}}"
                                 required>
                           </div>
                        </div>
                        <div class="form-group ic-cmp-int">
                           <div class="form-ic-cmp">
                              <i class="notika-icon notika-twitter"></i>
                           </div>
                           <div class="nk-int-st">
                              <input type="text" name="twitter" class="form-control"
                                 placeholder="twitter.com/yourusername" value="{{auth()->user()->twitter}}" required>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block"
                           style="margin-top: 15px;">Upload</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
               <div class="branchlinkshare">
                  <p><b>My branchlink</b> account: <a href="https://branchlink.in/u/{{auth()->user()->username}}"
                        target="_blank">https://branchlink.in/u/{{auth()->user()->username}}</a>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection