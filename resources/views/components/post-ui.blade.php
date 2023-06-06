


<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{url('uploads/'. $post->image) }}" alt="news image">
    <div class="card-body">
      <h5 class="card-title">{{ $post->title}}</h5>
      <p class="card-text">{{ $post->details}}</p>
      <p class="card-text">{{ $post->photo}} some quick example </p>
      <a href="{{url('news/'.$post->id)}}" class="btn btn-primary">READ MORE</a>
    </div>
  </div>