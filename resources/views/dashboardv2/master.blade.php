<!doctype html>
<html lang="en">

<head>
   @foreach ($userlink->take(1) as $itemlink)
   <title>{{$itemlink->titlepage}} - {{$itemlink->name}}</title>
   <link rel="icon" href="{!!asset('images/icon.png')!!}">
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="{!!asset('username/assets/css/custom2.css')!!}" />
   <script src="https://kit.fontawesome.com/ae026c985d.js" crossorigin="anonymous"
      type="96955bc328fcaeae7f75a015-text/javascript"></script>

   {{-- Meta Content --}}
   {{-- META CONTENT --}}
   <meta name="title" content="{{$itemlink->titlepage}} - {{$itemlink->name}}">
   <meta name="keywords" content="{{$itemlink->titlepage}}, {{$itemlink->name}}">
   <meta name="description"
      content="Take your any link to branchlink, to discover all of your content. And help them to find you.">
   <meta name="author" content="Branchlink.in from Sarjanamalam">
   <meta name="robots" content="index, follow">
   <meta name="language" content="English">
   {{-- SOCIAL MEDIA TAGS --}}
   {{-- FACEBOOK SOCMED --}}
   <meta property="fb:admins" content="111044563749542">
   <meta property="og:title" content="{{$itemlink->titlepage}} - {{$itemlink->name}}">
   <meta property="og:type" content="website">
   <meta property="og:url" content="{{URL::current()}}">
   <meta property="og:image" content="{!!asset('storage/img/covermcan.jpg')!!}">
   <meta property="og:description"
      content="Take your any link to branchlink, to discover all of your content. And help them to find you.">
   <meta property="og:site_name" content="{{$itemlink->name}}.">
   <!-- Twitter -->
   <meta property="twitter:card" content="summary_large_image">
   <meta property="twitter:url" content="{{URL::current()}}">
   <meta property="twitter:title" content="{{$itemlink->titlepage}} - {{$itemlink->name}}">
   <meta property="twitter:description"
      content="{{$itemlink->name}} page is made for personal creative curriculum vitae. Also for personal satisfaction and personal completeness in this digital age.">
   <meta property="twitter:image" content="{!!asset('storage/img/covermcan.jpg')!!}">
   @endforeach
</head>

<body>
   <div class="container my-5">
      <div class="row align-items-start">
         <div class="col-lg-12 col-md-12 col-sm-12 text-center headertop">
            @foreach ($userlink->take(1) as $linkss)
            <img src="{!!asset('media/'.$linkss->avatar)!!}" alt="Display picture {{$linkss->name}}"
               class="imguser-profile">
            <h4 class="mt-3">{{$linkss->titlepage}}</h4>
            <h5 class="mb-4">Made by <span class="dottedbottom"><a
                     href="{{$linkss->instagram}}"><?php echo urldecode('%40')?>{{$linkss->username}}</a></span></h5>
            {{-- <h5 class="mb-4">Jaka si tikus yang suka berbagi informasi seputar teknologi setiap hari! 🐭</h5> --}}
            @endforeach
         </div>
      </div>
      <div class="row align-items-start rowlist">
         @foreach ($userlink as $link)
         <div class="col-lg-12 my-2 text-center">
            <div class="card">
               <div class="card-body">
                  <a href="{{$link->link}}" target="_blank">{{$link->title}}</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
   @foreach ($userlink->take(1) as $linkfooter)
   <div class="container">
      <section id="wanna">
         <div class="row">
            <div class="col-lg-12 text-left">
               <h3 class="mb-3">Contact me as a personal?</h3>
               <h5>Email me: <span class="dottedbottom"><a
                        href="mailto:{{$linkfooter->email}}">{{$linkfooter->email}}</a></span></h5>
            </div>
         </div>
      </section>
   </div>
   <footer>
      <div class="container my-5">
         <div class="row align-items-start">
            <div class="col-lg-12 text-center">
               <?php $y = date('Y') ?>
               <p>&copy;Copyright {{$y}} - {{$linkfooter->name}}. All reserved.<br>MADE WITH &#129505; BY <span
                     class="dottedbottom">BRANCHLINK.IN</span> FROM <span class="dottedbottom">SARJANAMALAM</span>.
               </p>
            </div>
         </div>
      </div>
   </footer>
   @endforeach

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
   </script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
   </script>
</body>

</html>