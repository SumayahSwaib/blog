<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Engineer suma</title>
 

</head>
<body class="container pt-0 mt-0">
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('index') }}">HOME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <link rel="stylesheet" href="footer.css">
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">NEWS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
          </li>  
          @endguest
          
        {{-- @auth --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">DASHBOARD</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">Logout</a>
        </li> 
        {{-- @endauth --}}
        {{-- @endauth --}}
        {{-- @endauth --}}
        {{-- @endauth --}}
        {{-- @endauth --}}
          

         
          
          
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary" type="submit">Search </button>
        </form>
      </div>
    </div>
  </nav>
  
       <h1 class="text- center">@yield('title')</h1> 
        {{-- <a href="{{ route('model-save') }}">model-save</a><br>
        <a href="{{ route('quering') }}">quering</a><br>
        <a href="{{ route('relationships') }}">relationships</a><br> 
       <a href="{{ route('model-quering') }}">model-quering</a>
 --}} <div class="container">
  @yield('content')
  <br>
 
     </div>
        
        
  
</body>
<footer id="footer" class="bg-danger text-white d-flex-column text-center">
  
  
  <div class="container text-left text-md-center">
    
  </div>
  <!--/.Footer Links-->
  
  <!--Copyright-->
  <div class="py-3 text-center">
    &copy;  Engineer suma . All rights reserved
    <script>
      document.write(new Date().getFullYear())
    </script> <a target="_blank" href=""></a> 
  </div>
  <!--/.Copyright-->
</footer>

 {{-- <footer class="text-center">
  <p class="text-center">&copy; 2023 Engineer suma . All rights reserved.</p>
  </footer> --}}
</html>
