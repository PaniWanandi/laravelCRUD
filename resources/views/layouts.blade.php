<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Laravel</title>
       <!-- Fonts -->
       <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
       <!-- Styles -->
       <style>
           html, body {
               background-color: #fff;
               color: #636b6f;
               font-family: 'Raleway', sans-serif;
               font-weight: 100;
               height: 100vh;
               margin: 0;
           }
           .full-height {
               height: 100vh;
           }
           .flex-center {
               align-items: center;
               display: flex;
               justify-content: center;
           }
           .position-ref {
               position: relative;
           }
           .top-right {
               position: absolute;
               right: 10px;
               top: 18px;
           }
           .content {
               text-align: center;
           }
           .title {
               font-size: 84px;
           }
           .links > a {
               color: #636b6f;
               padding: 0 25px;
               font-size: 12px;
               font-weight: 600;
               letter-spacing: .1rem;
               text-decoration: none;
               text-transform: uppercase;
           }
           .m-b-md {
               margin-bottom: 30px;
           }
       </style>
   </head>
   <body>
   <nav class="navbar navbar-default">
 <div class="container-fluid">
   <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="{{url('/')}}">Laravel</a>
   </div>
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
       <li class="active">
           <li><a href="{{url('#')}}">Dosen</a></li>
           <li><a href="{{url('data')}}">Mahasiswa</a></li>
           <li><a href="{{url('#')}}">Mata Kuliah</a></li>
       </li>
     </ul>
     </form>
     </ul>
   </div><!-- /.navbar-collapse -->
 </div><!-- /.container-fluid -->
</nav>
@yield('contents')
</body>
</html>
