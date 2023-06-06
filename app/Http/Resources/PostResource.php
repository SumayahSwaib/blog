<?php

namespace App\Http\Resources;

use App\Models\NewsCategory;
use App\Models\NewsPost;
use App\Models\User;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PostResource 
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    {

    public function index(HttpRequest $request )
    {
        $posts= NewsPost::where([])
        ->orderBy ('id','desc')
        ->get();
         
        return view('dashboard.posts',[
            'posts'=> $posts
                
            
            
        ]);

        
    } 

    public function store(HttpRequest $r){
       $p = new NewsPost();
       $p->title = $r->title;
       $p->details = $r->details;
       $p->category_id = $r->category_id;
       $p->view = 0;
       $u = Auth::user();
/*         $p->user_id = $u->id; 
 */
       $images = User::files_uploader($_FILES);
      $p->photo ="no_image.jpg";
       

       if(isset($images[0])){
        $p->photo = $images[0];
       }
/*        dd($p->photo);
 */
       if($p->save()){
        return Redirect()->intended(url('dashboard/posts'));
       }else{
        return Redirect::back()
        ->withInput();

       }


    }
    public function Create(HttpRequest $request ){
        $cat = NewsCategory::where([])->orderBy('name','asc')->get();

        return view('dashboard.posts-create',[
           
            'cat'=> $cat
               
            
            
        ]);

    }

}
