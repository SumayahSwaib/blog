@extends('layouts.admin')
@section('title', 'Posts')

@section( 'create-button')
<a class="btn btn-success mt-2" href="{{url('dashboard/posts/create')}}">NEW</a>
 @endsection

@section( 'content')

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Photo</th>

        <th scope="col">posts</th>
       <th scope="col">category</th>
       <th scope="col">views</th>
       <th scope="col">Edit</th>
       <th scope="col">View</th>
       <th scope="col">Delete</th>
       </tr>
    </thead>
    <tbody>
      
        @foreach ($posts as $item)
        <tr>
            <th scope="row">{{$item ->id}}</th>
            <td>
            <img class="img img-fluid"
            style="width: 50px"
            src="{{url('uploads/'. $item->photo)}}" alt="photo">
          </td>
          <th scope="row">{{$item ->title}}</th>
         
          <th scope="row">{{$item ->cat->name }}</th>
          <th scope="row">{{$item ->view}}</th>
         
          <td >
            
             <a href=" {{url('dashboard/posts/edit' .$item->id )}}" class="btn btn-success">Edit</a>
             
         </td>
          <td >
            
             <a href="{{-- {{url('dashboard/posts/'.$item ->id)}} --}}" class="btn btn-primary">View</a>
             
         </td>
          <td >
            
             <a href="{{-- {{url('dashboard/posts/'.$item ->id)}} --}}" class="btn btn-danger">Delete</a>
             
         </td>
          
        
        </tr>
        
        @endforeach
        
     
    </tbody>
  </table>
    {{-- Pagination  --}}
   <div class="d-flex justify-content-center">
   {{ $posts->onEachSide(1)->links() }} 
</div>  
@endsection