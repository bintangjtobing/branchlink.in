@extends('dashboard.content.index')
@section('activelink','active')
@section('content')
<div class="main">
   <div class="notika-status-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
               <div class="notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                  <button type="button" class="btn btn-dashboard notika-btn-dashboard waves-effect btn-block btn-lg"
                     data-toggle="modal" data-target="#addlink">
                     Add new link
                  </button>
                  <div class="modal fade" id="addlink" role="dialog">
                     <div class="modal-dialog modals-default">
                        <form action="/add-links" id="formaction" method="post">
                           {{ csrf_field() }}
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                 <div class="form-example-int">
                                    <div class="form-group">
                                       <label>Enter title</label>
                                       <div class="nk-int-st">
                                          <input type="text" name="title" class="form-control input-sm"
                                             placeholder="Enter title">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                       <label>Enter link url</label>
                                       <div class="nk-int-st">
                                          <input type="url" name="linkurl" class="form-control input-sm"
                                             placeholder="https://">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="submit" onclick="form_submit()" class="btn btn-default"
                                    data-dismiss="modal">Add
                                    link</button>
                              </div>
                           </div>
                        </form>
                     </div>
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

<div class="sale-statistic-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
            @if(session('selesai'))
            <div class="alert alert-success alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i
                        class="notika-icon notika-close"></i></span></button>
               {{session('selesai')}}
            </div>
            @endif
         </div>
         @if($link->isEmpty())
         <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 text-center">
            <div class="media">
               <div class="media-body">
                  <h5 class="mt-0">No data here.</h5>
                  <a data-toggle="modal" data-target="#addlink">Click here to add new link</a>
               </div>
            </div>
         </div>
         @else
         @foreach ($link as $link)
         <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
            <div class="media">
               <div class="media-body">
                  <h5 class="mt-0">{{$link->title}}</h5>
                  <p><a href="{{$link->link}}">{{$link->link}}</a></p>
                  <div class="row">
                     <div class="col-md-6 text-left">
                        <h4><a href="#" title="Favorited"><span style="color: #f3751e;"><i
                                    class="fa fa-star"></i></span></a>
                           <a data-toggle="modal" data-target="#editlink{{$link->id}}" title="Favorited"><span
                                 style="color: #f3751e;"><i class="fa fa-pencil-square-o"></i></span></a></h4>
                     </div>
                     <div class="col-md-6 text-right">
                        <h4><a href="/delete/{{$link->id}}" title="Delete"><span style="color: #f3751e;"><i
                                    class="fa fa-trash-o"></i></span></a></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="editlink{{$link->id}}" role="dialog">
            <div class="modal-dialog modals-default">
               <form action="/update-link/{{$link->id}}" id="formupdate" method="POST">
                  {{ csrf_field() }}
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <div class="modal-body">
                        <div class="form-example-int">
                           <div class="form-group">
                              <label>Change title</label>
                              <div class="nk-int-st">
                                 <input type="text" name="title" class="form-control input-sm"
                                    placeholder="{{$link->title}}" value="{{$link->title}}">
                              </div>
                           </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                           <div class="form-group">
                              <label>Change link url</label>
                              <div class="nk-int-st">
                                 <input type="url" name="linkurl" class="form-control input-sm"
                                    placeholder="{{$link->link}}" value="{{$link->link}}">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="submit" onclick="updatesubmit()" class="btn btn-default"
                           data-dismiss="modal">Update changes</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         @endforeach
         @endif

      </div>
   </div>
</div>
@endsection