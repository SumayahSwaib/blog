<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use App\Models\NewsPost;
use App\Models\User;
use Illuminate\Http\Request;
use utils;

class DashboardController extends Controller
{

     public function edit($post_id  ){
        $cat = NewsCategory::where([])->orderBy('name','asc')->get();
/*         $post = NewsPost::where([''])->get();
 */        $post = NewsPost::find($post_id );
        return view('dashboard.edit',compact('post','cat')
             );

         /* compact('post','cat')); */ 
        
    } 

    public function categories(){
        $cat = NewsCategory::where([])->orderBy('name','asc')->get();
       
       return view('dashboard.categories',[
        'categories' => $cat
      
       ]); 
       
     
       
    }
    public static function categories_store(request $r){
        $images = User::files_uploader($_FILES);
        $thumb ="no_image.jpg";//what is this?
        //there you are you are replacing your array of images woth a string..
        //so, because of that, you could loose the data for your images...

        if(isset($images[0])){
        $thumb = $images[0];
        }
       $cat = new NewsCategory();
       $cat->name =$_POST['name'];
       $cat->details =$_POST['details'];
       
       $cat->photo =$thumb;

       if($cat->save()){
        die("success");
       }else{
        die("failed");

       }
       

     }
    
    public function dashboard(){
        return view('dashboard.index');
    }
    public function categories_create(){
        return view('dashboard.categories-create');
    }
    
    

}
