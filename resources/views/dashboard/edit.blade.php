 @extends('layouts.admin')
@section('title', 'Edit Post')

@section( 'create-button')
<a class="btn btn-danger mt-2" href="{{url('dashboard/posts')}}">BACK</a>
 @endsection


@section( 'content')

<form   action="{{url('dashboard/posts')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name:">News Title</label>
      <input requred value="title" class="form-control" type="text" name="title" placeholder="Enter News Title">
     {{--  <p class="small text-danger">{{$errors->first('title') }}</p> --}}
    </div>
     <div class="form-group">
      <label for="category_id"> News Category</label>
      <select   class="form-control-file" name="category_id" id="category_id"> 
         @foreach ($cat as $cat)
            <option value="{{$cat->id}}">{{$cat->name }}</option>
        @endforeach 
      </select>
    </div>
  

    <div class="form-group">
      <label for="photo">Upload photo</label>
     <input requred   type="file" class="form-control-file" name="photo" accept=".png,.jpg,.gif,.jpeg" id="photo">
    </div>

    <div class="form-group">
      <label for="News Content:"> News Content</label>
      <textarea requred value="{{ old('details') }}" class="form-control" name="details" id="details" cols="30" rows="5" placeholder="Enter content" ></textarea>
     
    </div>
    
    

     

      
    
    <button type="submit" class="btn btn-danger">SAVE</button>
  </form>


@endsection 