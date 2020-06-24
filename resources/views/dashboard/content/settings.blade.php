@extends('dashboard.content.index')
@section('activesettings','active')
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
                  <h4>Settings</h4>
                  <div class="pageopt">
                     <form action="">
                        
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