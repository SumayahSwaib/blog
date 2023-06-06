@extends('layouts.admin')
@section('title', 'New Categories')

@section( 'create-button')
<a class="btn btn-success mt-2" href="{{route('categories') }}">LIST</a>
 @endsection


@section( 'content')

<form   action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name:">News Category Name</label>
      <input requred value="{{ old('name') }}" class="form-control" type="text" name="name" placeholder="Enter category name">
      <p class="small text-danger">{{$errors->first('name') }}</p>
    </div>

    
    <div class="form-group">
        <label for="photp">Upload photo</label>
        {{-- WHERE IS THE NAME PARAMETER OF THE FILE INPUT????????
            Is it there?
            yes
            show it to me?
oswadde
ahahh photo is missing
have u sen your mistake?
yah 
ok
bye
ok thans

            --}}
        <input requred   type="file" class="form-control-file" name="photo" accept=".png,.jpg,.gif,.jpeg" id="photo">
      </div>

      <div class="form-group">
        <label for="Password:"> Details</label>
        <textarea requred value="{{ old('details') }}" class="form-control" name="details" id="" cols="30" rows="5" placeholder="Enter Details" ></textarea>
       
      </div>
    
    <button type="submit" class="btn btn-danger">Create</button>
  </form>


@endsection