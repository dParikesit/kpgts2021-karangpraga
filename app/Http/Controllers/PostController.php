<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;

class PostController extends Controller
{
    use SoftDeletes;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts            = Post::orderBy('post_date', 'desc')->paginate(20);
        $posts_page_left  = max(                 1, $posts->currentPage() - 2                           );
        $posts_page_right = min($posts->lastPage(), max($posts->currentPage() + 2, $posts_page_left + 4));
        return View::make('page.admin.post_index', compact([
            'posts',
             
            'posts_page_left',
            'posts_page_right'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->isAdmin()) {
            return View::make('page.admin.post_invalid');
        }
        return View::make('page.admin.post_create', compact([]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->isAdmin()) {
            return View::make('page.admin.post_invalid');
        }
        $post = new Post();
        $post->post_author  = Auth::id();
        $post->post_title   = $request->input('post-title');
        $post->post_slug    = $request->input('post-slug');
        $post->post_cat     = $request->input('post-cat');
        $post->post_desc    = $request->input('post-desc');
        $post->post_content = $request->input('post-content');
        $post->post_media   = '/img/post-media/'.$request->input('post-slug').'.'.$request->file('post-media')->getClientOriginalExtension();
        $post->post_status  = $request->input('post-status');
        if ($post->post_status == 'Pending') {
            $post->post_date    = new Carbon($request->input('post-date') . $request->input('post-time'));
            $post->post_status  = 'Publish';
        } else {
            $post->post_date    = Carbon::now();
        }
        $post->save();

        $post_media_name = $request->input('post-slug').'.'.$request->file('post-media')->getClientOriginalExtension();
        $request->file('post-media')->move(public_path('img/post-media'), $post_media_name);
        
        return redirect('/admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        
        return View::make('page.admin.post_show', compact(['post']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        if (Auth::user()->isAdmin() && Auth::id() != $post->post_author) {
            return View::make('page.admin.post_invalid', compact(['post']));
        }

        $post_date = new Carbon($post->post_date);

        return View::make('page.admin.post_edit', compact(['post','post_date']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        
        if (Auth::user()->isAdmin() && Auth::id() != $post->post_author) {
            return View::make('page.admin.post_invalid');
        }

        $post->post_title   = $request->input('post-title');
        $post->post_slug    = $request->input('post-slug');
        $post->post_cat     = $request->input('post-cat');
        $post->post_desc    = $request->input('post-desc');
        $post->post_content = $request->input('post-content');
        if ($request->file('post-media')) {
            $post->post_media   = '/img/post-media/'.$request->input('post-slug').'.'.$request->file('post-media')->getClientOriginalExtension();
        }

        $post->post_status  = $request->input('post-status');
        if ($post->post_status == 'Pending') {
            $post->post_date    = new Carbon($request->input('post-date') . $request->input('post-time'));
            $post->post_status  = 'Publish';
        } else {
            $post->post_date    = Carbon::now();
        }
        $post->save();

        if ($request->file('post-media')) {
            $post_media_name = $request->input('post-slug').'.'.$request->file('post-media')->getClientOriginalExtension();
            $request->file('post-media')->move(public_path('img/post-media'), $post_media_name);
        }
        
        return redirect('/admin/post/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        
        if (!Auth::user()->isAdmin()) {
            return View::make('page.admin.post_invalid');
        }

        $post->delete();

        return redirect('/admin/post');

    }
}
