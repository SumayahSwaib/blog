
@extends('layouts.pageslayout')
@section('title', 'Home')
@section( 'content')
<hr>


    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4">
            @include('components.post-ui',[
                'posts'=>$post,
              ])
                  
                
        </div>
       
        @endforeach 

    </div>
   

@endsection


