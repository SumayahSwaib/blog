<!DOCTYPE html>
<html>
<head>
  <base href = "{{url('')}}/" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>Admin - Engineer Sumayah</title>
 

</head>
<body class="container pt-0 mt-0">
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('dashboard') }}">DASHBOARD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">WEBSITE</a>
          </li>
          
          <div class="col-md-8">
            <li class="nav-item" class="d-flex">
              <button class="btn btn-success" type="submit">Logout </button>
              </li>
           </div>
            
        
       </ul>
       
          
        
          
       
         
          
          
        
      </div>
    </div>
  </nav>
  
      
       
       {{--  @yield('content') --}}
       
        <div class="row">

          <div class="col-md-4">
            <ul class="list-group">
              <a href=" " class="list-group-item list-group-item-action">CREATE NEWS POST</a>
              <a href="{{url('dashboard/posts')}}" class="list-group-item list-group-item-action"> NEWS POSTS</a>
              <a href="{{route('categories') }} " class="list-group-item list-group-item-action"> NEWS CATEGORY</a>
              </ul>
          </div>

          <div class="col-md-8">
            <div class="row">
            
              <div class="col-md-10">
                <h1 class="text-center" class="text-small" class="h5">@yield('title')</h1> 
                 @yield('content')
              </div>
              <div class="col-md-2">
                
                 @yield('create-button')
              </div>
            </div>
          </div>
          
         
          
                
      
                
          
      
      </div>
      
        
  
</body>

 <footer class="text-center">
  <p class="text-center">&copy; 2023 Engineer suma . All rights reserved.</p>
  </footer>
</html>
