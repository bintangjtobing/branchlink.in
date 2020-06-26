<!DOCTYPE html>
<html lang="en">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <meta name="author" content="Sarjanamalam." />
   <meta name="description" content="">
   <link rel="icon" href="images/icon.png">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Document title -->
   <title>Dashboard Branchlink | {{auth()->user()->name}}</title>
   <!-- Stylesheets & Fonts -->
   <link href="css/plugins.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <link href="homepages/forum/css/style.css" rel="stylesheet">

   <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"
      type="96955bc328fcaeae7f75a015-text/javascript"></script>
</head>

<body>
   {{-- Modal Add new link --}}
   <div class="modal fade" id="addlink" role="modal" aria-labelledby="modal-label" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <form action="/add-links" id="formaction" method="POST">
               {{ csrf_field() }}
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <div class="form-example-int">
                     <div class="form-group">
                        <label>Enter title</label>
                        <div class="nk-int-st">
                           <input type="text" name="title" class="form-control input-sm" placeholder="Enter title"
                              required>
                        </div>
                     </div>
                  </div>
                  <div class="form-example-int mg-t-15">
                     <div class="form-group">
                        <label>Enter link url</label>
                        <div class="nk-int-st">
                           <input type="url" name="linkurl" class="form-control input-sm" placeholder="https://"
                              required>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="submit" onclick="form_submit()" class="btn btn-default" data-dismiss="modal">Add
                     link</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   {{-- End Modal New Link --}}
   <div class="body-inner">
      <header id="header">
         <div class="header-inner">
            <div class="container">
               <div id="logo"> <a href="/administrator"><span class="logo-default"><img src="welcome/image/logoweb.png"
                           alt="" style="width:200px;"></span><span class="logo-dark"><img
                           src="welcome/image/logoweb.png" alt="" style="width:200px;"></span></a>
               </div>
               <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
               <div id="mainMenu">
                  <div class="container">
                     <nav>
                        <ul>
                           {{-- <li><a href="index.html">Home</a></li> --}}
                           <li class="dropdown"><a href="#">{{auth()->user()->name}}</a>
                              <ul class="dropdown-menu">
                                 <li><a href="/logout/{{auth()->user()->id}}">Logout</a></li>
                              </ul>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <section class="background-grey">
         <div class="container">
            <div class="forum-search-form">
               <div class="row">
                  <div class="col-lg-10 center m-b-40">
                     <div class="text-center">
                        <h2 class="text-medium">Dashboard</h2>
                        <p class="p-b-0">Hello {{auth()->user()->name}}.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="forum">
               <div class="row">
                  <div class="col-lg-8">
                     <div class="tabs tabs-folder">
                        <ul class="nav nav-tabs" id="myTab3" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" id="link-tab" data-toggle="tab" href="#link" role="tab"
                                 aria-controls="link" aria-selected="true">Link</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile3" role="tab"
                                 aria-controls="profile" aria-selected="false">Appearance</a>
                           </li>
                           {{-- <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact3" role="tab"
                           aria-controls="contact" aria-selected="false">Contact</a>
                     </li> --}}
                        </ul>
                        <div class="tab-content" id="myTabContent3">
                           <div class="tab-pane fade show active" id="link" role="tabpanel" aria-labelledby="link-tab">
                              <a class="btn btn-primary btn-block" data-target="#addlink" data-toggle="modal">
                                 Add new link
                              </a>
                              @if(session('selesai'))
                              <div class="alert alert-success alert-dismissible" role="alert">
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                       aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
                                 {{session('selesai')}}
                              </div>
                              @endif
                              <div class="m-t-15">
                                 @if($link->isEmpty())
                                 <div class="media">
                                    <div class="media-body">
                                       <h5 class="mt-0">No data here.</h5>
                                       <a data-toggle="modal" data-target="#addlink">Click here to add new link</a>
                                    </div>
                                 </div>
                                 @else
                                 @foreach ($link as $link)
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="card-title">{{$link->title}}</h5>
                                       <h6 class="card-subtitle mb-2 text-muted">
                                          {{$link->link}}
                                       </h6>
                                       <div class="row">
                                          <div class="col-md-6 text-left">
                                             {{-- <h6>
                                                <a data-toggle="modal" data-target="#editlink" title="Favorited"><span
                                                      style="color: #f3751e;"><i
                                                         class="fas fa-pencil-alt"></i></span></a></h6> --}}
                                             {{-- <span><i class="fas fa-pencil-alt"></i></span> --}}
                                          </div>
                                          <div class="col-md-6 text-right">
                                             <h6><a href="/delete/{{$link->id}}" title="Delete"><span
                                                      style="color: #f3751e;"><i
                                                         class="fas fa-trash-alt"></i></span></a>
                                             </h6>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach
                                 @endif
                              </div>
                           </div>
                           <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab">
                              <div class="pageopt">
                                 <img class="userimg-profile" src="{{asset('media/'.auth()->user()->avatar)}}"><br>
                                 <label for="">Upload Avatar</label>
                                 <form action="/add-avatar/{{auth()->user()->id}}" enctype="multipart/form-data"
                                    method="post">
                                    {{ csrf_field() }}
                                    <input type="file" name="avatar" id="" class="form-control">
                                    <button type="submit" class="btn btn-primary btn-block"
                                       style="margin-top: 15px;">Upload</button>
                                 </form>
                                 <h3>Page Informations</h3>
                                 <form action="/add-pageinformations/{{auth()->user()->id}}"
                                    enctype="multipart/form-data" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                       <label>Title page</label>
                                       <div class="nk-int-st">
                                          <input type="text" class="form-control input-sm"
                                             value="{{auth()->user()->titlepage}}" name="titlepage"
                                             placeholder="Enter title page" required>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label>Email</label>
                                       <div class="nk-int-st">
                                          <input type="text" class="form-control input-sm"
                                             value="{{auth()->user()->email}}" name="email" placeholder="Enter email"
                                             required>
                                       </div>
                                    </div>
                                    <h3>Social links</h3>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1"><i
                                                class="fab fa-facebook-f"></i></span>
                                       </div>
                                       <input type="text" name="facebook" class="form-control"
                                          placeholder="facebook.com/yourusername" aria-label="facebook.com/yourusername"
                                          aria-describedby="basic-addon1" value="{{auth()->user()->facebook}}" required>
                                    </div>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1"><i
                                                class="fab fa-twitter"></i></span>
                                       </div>
                                       <input type="text" name="twitter" class="form-control"
                                          placeholder="twitter.com/yourusername" aria-label="twitter.com/yourusername"
                                          aria-describedby="basic-addon1" value="{{auth()->user()->twitter}}" required>
                                    </div>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1"><i
                                                class="fab fa-instagram"></i></span>
                                       </div>
                                       <input type="text" name="instagram" class="form-control"
                                          placeholder="instagram.com/yourusername"
                                          aria-label="instagram.com/yourusername" aria-describedby="basic-addon1"
                                          value="{{auth()->user()->instagram}}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block"
                                       style="margin-top: 15px;">Upload</button>
                                 </form>
                              </div>
                           </div>
                           {{-- <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab">
                        <p>Soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                           possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam
                           et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae
                           sint et molestiae non recusandae. </p>
                     </div> --}}
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="branchlinkaccount">
                        <p><b>My branchlink</b> account: <br><a
                              href="https://branchlink.in/u/{{auth()->user()->username}}"
                              target="_blank">https://branchlink.in/u/{{auth()->user()->username}}</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
      </section>

      <footer id="footer">
         <div class="copyright-content">
            <div class="container">
               <?php $y = date('Y') ?>
               <div class="copyright-text text-center">&copy; {{$y}} BRANCHLINK.IN FROM SARJANAMALAM.
                  All
                  Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- end: Footer -->

   </div>
   <!-- end: Body Inner -->

   <!-- Scroll top -->
   <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
   <!--Plugins-->
   <script src="js/jquery.js"></script>
   <script src="js/plugins.js"></script>

   <!--Template functions-->
   <script src="js/functions.js"></script>
   <script type="text/javascript">
      function form_submit() {
         document.getElementById("formaction").submit();
      }
   </script>

</body>

</html>