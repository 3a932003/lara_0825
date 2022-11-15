<?php
use App\Models\Post;
use App\Models\Comment;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    //return view('index');
    //return view('post');
    //return view('contact');
    //return view('about');
//    return redirect(route('posts.index'));
    //練習2
//    $post = new Post();//先產生Post的物件$post，$post將代表posts資料表的一篇貼文
//    $post->title = 'test title';//指定貼文的title
//    $post->content = 'test content';//指定貼文的content
//    $post->save();//將新貼文$post存入posts資料表
//    Post::create([
//        'title' => 'created title',
//        'content' => 'created content',
//    ]);
    //3-3
//   $posts=Post::all();//取出posts資料表所有貼文
//    foreach ($posts as $post){
//        echo '編號:'.$posts->id.'<br>';
//        echo '標題:'.$posts->title.'<br>';
//        echo '內容:'.$posts->content.'<br>';
//        echo '張貼時間:'.$posts->created_at.'<br>';
//        echo '---------------'.'<br>';
//    }
//    dd($posts);//data dump可將變數內容倒出，並停止程式執行
    //3-2
//      $post = Post::find(1);//找尋posts資料表id=的貼文
//    echo '標題:'.$post->title."<br>";
//    echo '內容:'.$post->content."<br>";
//    dd($post);
    //3-4
// $posts = Post::where('id', '<', 10)->orderBy('id', 'DESC')->get();//查詢符合條件(id<10)的貼文，排序後，取出
//  dd($posts);
    //4-1~4-2
   /* $post = Post::find(1);
    $post->update([
        'title' => 'updated title',
        'content' => 'updated content',
    ]);
    return 'Updated, OK!';*/
    //4-3~4-4
    /*$post = Post::find(1);
    $post->title = 'saved title';
    $post->content = 'saved content';
    $post->save();
    return 'Saved, OK!';*/
    //5-1
   /* $post = Post::find(1);
    $post->delete();*/
    //5-3
    //Post::destroy(2);
    //5-5
   /* Post::destroy(3, 5, 7);
    return 'Deleted!';*/
    //6-1
   /*$allPosts = Post::all();//多筆貼文的集合
    dd($allPosts);*/
    //6-2
    /*$featuredPosts = Post::where('is_feature', 1)->get(); //多筆貼文的集合
    dd($featuredPosts);*/
    //6-3
    /*$fourthPost = Post::find(4);
    dd($fourthPost);*/
    //6-4
    /*$lastPost = Post::orderBy('id', 'DESC')->first();
    dd($lastPost);*/
    //7-4
    /*$post = Post::find(6);
    echo '標題: '.$post->title.'<br>';
    echo '內容: '.$post->content.'<br>';
    echo '--------------------------'.'<br>';
    //$comments = $post->comments()->get(); //$post->comments()->get()可簡寫$post->comments
    $comments = $post->comments;
    foreach ($comments as $comment){
        echo '留言: '.$comment->content."<br>";
        echo '-----------------------------'.'<br>';
    }*/
    $comment = Comment::find(2);
    echo $comment->content.'<br>';
    echo '******************'.'<br>';
    $post = $comment->post()->first();
    echo $post->id.'<br>';
    echo $post->title.'<br>';
    echo $post->content.'<br>';


});
Route::get('posts',[PostController::class, 'index'])->name('posts.index');
Route::get('post',[PostController::class, 'show'])->name('posts.show');
Route::get('contact',[PostController::class, 'contact'])->name('posts.contact');
Route::get('about',[PostController::class, 'about'])->name('posts.about');
