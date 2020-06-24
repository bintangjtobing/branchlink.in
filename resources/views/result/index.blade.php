<!DOCTYPE HTML>
<html>


<head>
   @foreach ($userlink->take(1) as $itemlink)
   <title>{{$itemlink->titlepage}} - {{$itemlink->name}}</title>
   <link rel="icon" href="{!!asset('images/icon.png')!!}">
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
   <link rel="stylesheet" href="{!!asset('username/assets/css/main.css')!!}" />
   <link rel="stylesheet" href="{!!asset('username/assets/css/custom.css')!!}" />
   <noscript>
      <link rel="stylesheet" href="{!!asset('username/assets/css/noscript.css')!!}" /></noscript>

   {{-- META CONTENT --}}
   <meta name="title" content="{{$itemlink->titlepage}} - {{$itemlink->name}}">
   <meta name="keywords" content="{{$itemlink->titlepage}}, {{$itemlink->name}}">
   <meta name="description"
      content="Tempat kalian pengen tau di platform mana sih saya aktif? Nah disini akan menjawab dan kalian langsung tau apa apa saja aktifitas yang dilakukan. Hehehe">
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
      content="Tempat kalian pengen tau di platform mana sih saya aktif? Nah disini akan menjawab dan kalian langsung tau apa apa saja aktifitas yang dilakukan. Hehehe">
   <meta property="og:site_name" content="{{$itemlink->name}}.">
   <!-- Twitter -->
   <meta property="twitter:card" content="summary_large_image">
   <meta property="twitter:url" content="{{URL::current()}}">
   <meta property="twitter:title" content="{{$itemlink->titlepage}} - {{$itemlink->name}}">
   <meta property="twitter:description"
      content="{{$itemlink->name}} page is made for personal creative curriculum vitae. Also for personal satisfaction and personal completeness in this digital age.">
   <meta property="twitter:image" content="storage/img/covermcan.jpg">
   @endforeach
</head>

<body class="is-preload">
   <!-- Wrapper -->
   <div id="wrapper">
      <!-- Header -->
      <header id="header" class="alt">
         @foreach ($userlink->take(1) as $linkss)
         <span class="logo"><img src="{!!asset('media/'.$linkss->avatar)!!}"
               alt="Display picture {{$linkss->name}}" /></span>
         <p>{{$linkss->titlepage}}<br>
            Made by <a href="{{$linkss->instagram}}">@ {{$linkss->username}}</a>
         </p>
         @endforeach
      </header>
      <!-- Introduction -->
      @foreach ($userlink as $link)
      <section id="askfm">
         <ul class="actions fit">
            <li><a href="{{$link->link}}" class="button large fit askfm-theme">{{$link->title}}
               </a></li>
         </ul>
      </section>
      @endforeach
      @foreach ($userlink->take(1) as $linkfooter)
      <!-- Footer -->
      <footer id="footer">
         <section>
            <h2>Wanna be friends?</h2>
            <dl class="alt">
               <dt>Email</dt>
               <dd><a href="mailto:{{$linkfooter->email}}">{{$linkfooter->email}}</a></dd>
            </dl>
            <ul class="icons">
               <li><a href="https://{{$linkfooter->twitter}}" class="icon brands fa-twitter alt"><span
                        class="label">Twitter</span></a>
               </li>
               <li><a href="https://{{$linkfooter->facebook}}" class="icon brands fa-facebook-f alt"><span
                        class="label">Facebook</span></a>
               </li>
               <li><a href="https://{{$linkfooter->instagram}}" class="icon brands fa-instagram alt"><span
                        class="label">Instagram</span></a>
               </li>
            </ul>
         </section>
         <?php $year = date('Y'); ?>
         <p class="copyright">&copy; {{$linkfooter->name}} {{$year}} - Branchlink.in from Sarjanamalam.</p>
      </footer>
      @endforeach

   </div>

   <!-- Scripts -->
   <script src="{!!asset('username/assets/js/jquery.min.js')!!}"></script>
   <script src="{!!asset('username/assets/js/jquery.scrollex.min.js')!!}"></script>
   <script src="{!!asset('username/assets/js/jquery.scrolly.min.js')!!}"></script>
   <script src="{!!asset('username/assets/js/browser.min.js')!!}"></script>
   <script src="{!!asset('username/assets/js/breakpoints.min.js')!!}"></script>
   <script src="{!!asset('username/assets/js/util.js')!!}"></script>
   <script src="{!!asset('username/assets/js/main.js')!!}"></script>

</body>

</html>