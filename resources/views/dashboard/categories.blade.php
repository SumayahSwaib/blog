@extends('layouts.admin')
@section('title', 'Categories')

@section( 'create-button')
<a class="btn btn-success mt-2" href="{{route('categories-create') }}">NEW</a>
 @endsection

@section( 'content')

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Photo</th>
        <th scope="col">Category Name</th>
      <th scope="col">posts</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach ($categories as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>
            <img class="img img-fluid"
            style="width: 50px"
            src="{{url('uploads/'. $item->photo)}}" alt="photo">
          </td>
            
            <td>{{$item->name}}</td>
            
            <td>suma</td>
        </tr>
        
        @endforeach
        
     
    </tbody>
  </table>
@endsection