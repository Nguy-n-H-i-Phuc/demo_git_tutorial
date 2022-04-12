<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "day la trang index";
    }

    public function add()
    {
        //
        // return "them bai viet co id" . $id;

        // chuyen huong 
        // c1:uri
        // return redirect('post');
        // c2:name
        // return redirect()->route('post.index');
        // DB::table('posts')->insert(
        //     ['title' => 'post 1', 'content' => 'content 2', 'user_id' => '1']
        // );


        // ORM save()

        // $post = new Posts;
        // $post->title = " laravel pro 1";
        // $post->content = "content laravel pro 1";
        // $post->user_id = 1;
        // $post->save();


        // ORM creat()
        Posts::create([
            'title' => 'create 1',
            'content' => 'content 1',
            'user_id' => 1
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        // $list_posts =  DB::table('posts')->get();
        // foreach ($list_posts as $item) {
        //     echo $item->title;
        // }
        // $list_posts =  DB::table('posts')->select('title')->where('title', 'post 1')->get();
        // //lay 1 ban 
        // // $list_posts =  DB::table('posts')->select('title')->where('title', 'post 1')->first();
        // // LAY BAN GHI THEO ID (find)
        // $list_posts =  DB::table('posts')->select('title')->find(1);
        // return $list_posts;



        // $join = DB::table('posts')
        //     ->join('users', 'users.id', '=', 'posts.user_id')
        //     ->select('users.user_name', 'posts.title')
        //     ->get();

        // print_r($join);
        // return $join;



        $posts = DB::table('posts')->where('title', 'like', '%iphone%')->get();


        echo "<pre>";
        print_r($posts);
        echo "</pre>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        // QUERY BUILDER

        DB::table('posts')->where('id', $id)->update(['title' => 'xz10r 20223454454']);
        // ELEQUENT ORM
        $post = Posts::find($id);
        $post->title = " laravel pro 100";
        $post->content = "content laravel pro 1";
        $post->user_id = 1;
        $post->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //QUERY BUILDER (delete)
        // DB::table('posts')
        //     ->where('id', $id)
        //     ->delete();


        // ELEQUENT ORM (delete) 

        // $post = Posts::find($id);
        // $post->delete();

        // ELEQUENT ORM (delete co dieu kien)

        // Posts::where('user_id', 5)->delete();

        // ELEQUENT ORM (destroy)

        // Posts::destroy($id);
        // Posts::destroy([$id1 , $id2,....])



    }
    public function read()
    {
        // lay tat ca ban ghi
        // $posts = Posts::all();
        // lay danh sach bana ghii theo dieu kien
        // $posts = Posts::where('id', '2')->get();
        // lay 1 ban ghi theo dieu kien
        // $post = Posts::where('id', 3)->first();
        // sap xep
        // lay 1 ban ghi theo id
        // $posts = Posts::orderBy('id')->get();
        //orderBy
        // $posts = Posts::selectRaw("COUNT('id') as number_posts , user_id")
        //     ->groupBy('user_id')
        //     ->orderBy('number_posts', 'desc')
        //     ->get();
        // return $posts;



        // ORM (softdelete all)
        // $posts = Posts::withTrashed()->get();

        // ORM (softdelete not trash)
        // $posts = Posts::withoutTrashed()->get();

        // ORM (softdelete  trash)
        // $posts = Posts::onlyTrashed()->get();

        // return $posts;
    }
    public  function restore($id)
    {
        //lay nhung tk trash
        $post = Posts::onlyTrashed()->where('id', $id)->restore();
    }

    public function permanentlyDelete($id)
    {
        // xoa vinh vien nhung tk dc xoa tam thoi
        Posts::onlyTrashed()->where('id', $id)->forceDelete();
    }
}
