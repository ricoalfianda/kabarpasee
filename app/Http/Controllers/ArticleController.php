<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
      //$articles = \DB::table('articles')->join('users','users.id','=','articles.user_id')->join('categories','categories.id','=','articles.category_id')->
                //  select('articles.*','categories.*','users.*')->where('articles.user_id',\Auth::user()->id)->get();

      $articles = \DB::table('articles')->join('users','users.id','=','articles.user_id')->join('categories','categories.id','=','articles.category_id')->
                  select('articles.id','articles.picture','articles.title','categories.category','users.name','articles.created_at')->where('articles.user_id',\Auth::user()->id)->get();

      return view('admin/layouts/article', compact('articles'));
    }

    public function create(){
      $categories= \DB::table('categories')->orderBy('category','asc')->get();

      return view('admin/layouts/add_article', compact('categories'));
    }

    public function store(Request $request){
      $this->validate($request,[
        'title'=>'required',
        'article'=>'required',
        'picture'=>'required',
        'category_id'=> 'required'
      ]);

      $file= $request->file('picture');

      $data= array();

      if($file){
        $destinationPath  = 'article';
        $file->move($destinationPath, $file->getClientOriginalName());

        $data['category_id']= $request->category_id;
        $data['title']=  $request->title;
        $data['article']= $request->article;
        $data['user_id']= \Auth::user()->id;
        $data['created_at']= date('Y-m-d H:i:s');
        $data['updated_at']= date('Y-m-d H:i:s');
        $data['picture']= $file->getClientOriginalName();
      }

      \DB::table('articles')->insert($data);

      return redirect('admin/article');
    }

    public function edit($id){
      $articles=\DB::table('articles')->where('id',$id)->first();
      $categories= \DB::table('categories')->orderBy('category','asc')->get();

      return view('admin/layouts/edit_article', compact('articles','categories'));
    }

    public function update(Request $request, $id){
      $this->validate($request,[
        'title'=>'required',
        'article'=>'required',
        'category_id'=> 'required'
      ]);

      $file= $request->file('picture');

      $data= array();

      if($file){
        $destinationPath  = 'article';
        $file->move($destinationPath, $file->getClientOriginalName());

        $data['category_id']= $request->category_id;
        $data['title']=  $request->title;
        $data['article']= $request->article;
        $data['user_id']= \Auth::user()->id;
        $data['updated_at']= date('Y-m-d H:i:s');
        $data['picture']= $file->getClientOriginalName();
      }
      else{
        $data['category_id']= $request->category_id;
        $data['title']=  $request->title;
        $data['article']= $request->article;
        $data['user_id']= \Auth::user()->id;
        $data['updated_at']= date('Y-m-d H:i:s');
      }

      \DB::table('articles')->where('id',$id)->update($data);

      return redirect('admin/article');
    }

    public function delete($id){
      \DB::table('articles')->where('id',$id)->delete();

      return redirect('admin/article');
    }

    public function show(){

    }
}
