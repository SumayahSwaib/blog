<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use App\Models\newsComment;
use App\Models\NewsPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Foreach_;
use PhpParser\Node\Stmt\TryCatch;

class HomeController extends Controller


{
    public function create_comment(Request $c)
    {

        $p = new newsComment();
        $p->user_id = $c->user_id;
        $p->new_posts_id = $c->new_posts_id;
        $p->body = $c->body;
        $u = Auth::user();//now what if a user is not logged in yet?
        //you can see... user is not looged in!
        $p->user_id = $u->id;

        if ($p->save()) {
            die('success');
/*             return Redirect()->intended(view('comments'));
 */        } else {
            die('failed');
/*             return Redirect::back();
 */        }
    }


    public function getData()
    {
        $posts = NewsPost::all();
        return view('index', [
            'posts' => $posts
        ]);
    }
    public function news($id)
    {
        $p = NewsPost::findorfail($id);
        return view('post-details', [
            'post' => $p
        ]);
    }
    public function index()
    {
        $posts = NewsPost::all();
        return view('index', [
            'posts' => $posts
        ]);
    }
      /* regester part */

    public function regester(Request $r)
    {
        if ($r->password != $r->password1) {
            return Redirect::back()
                ->withErrors(['password' => ['password does not match']])
                ->withInput();
        }
        $u = User::where('email', $r->email)->first();
        if ($u != null) {
            return Redirect::back()
                ->withErrors(['email' => ['email already exist']])
                ->withInput();
        }

        $u = new User();
        $u->name = $r->name;
        $u->email = $r->email;
        $u->password = password_hash($r->password, PASSWORD_DEFAULT);
        $u->user_type = "DEFAULT";



        try {
            $u->save();
            $credentials = [
                'email' => $u->email,
                'password' => $u->password,
            ]; 
            if (Auth::attempt($credentials)) {
                return redirect()->intended('dashboard');
            }else{
                return Redirect::back()
                ->withErrors(['email' => ['failed to log you in']])
                ->withInput();
        }
           

            
        } catch (\Throwable $th) {
            return Redirect::back()
                ->withErrors(['email' => ['failed to create account', $th]])
                ->withInput();
        }
    }
      /*  login logic */
    public function login(Request $r)
    {
        if ($r->login_password != null) {
            return Redirect::back()
                ->withErrors(['login_password' => [' correct password is required']])
                ->withInput();
        }
        $u = User::where('email', $r->login_email)->first();
        if ($u == null) {
            return Redirect::back()
                ->withErrors(['email' => ['user doesnot exist']])
                ->withInput();
        }




        try {

            $credentials = [
                'email' => $r->login_email,
                'password' => $r->login_password,
            ];

            if (Auth::attempt($credentials)) {
                return redirect()->intended('dashboard');
            }

            return Redirect::back()
                ->withErrors(['email' => ['failed to log you in']])
                ->withInput();
        }  catch (\Throwable $th) {
            return Redirect::back()
                ->withErrors(['email' => ['failed to create account', $th]])
                ->withInput();
        } 
    } 
}
   
   
   
   
   
    










/* public function relationships(){
       
        $cats = NewsCategory:: all();
        $post = NewsPost:: all(); */

       /*  $p = new NewsPost();
        $p-> title = 'new vision';
        $p-> photo = 'no photo6.jpg';
        $p-> details = 'new visionnew visionnew visionnew vision';
        $p-> view = 2;
        $p-> user_id = 5;
        $p-> category_id = rand(1,5);
        $p ->save();
        dd(($p->count())); */
       
  
    
    /* public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function services(){
        return view('services');
    } */
/* saving data  */  
   /* public function model_save(){

    $m= new NewsCategory();
    $m->name = 'education';
    $m->photo = 'no_image7.jpg';
    $m->details = 'new details about education'; 
   $m->save();
      
    } 


        
        /* $categories = NewsCategory::all();
        foreach($categories as $key => $cat){
            echo "{$cat->id}. ($cat ->name)<br>";
        } 
    */
