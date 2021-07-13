<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Home()
    {
        $posts = Post::all();
        $counts = [
            'users' =>  User::all()->count(),
            'posts' =>  Post::all()->count()
        ];
        return view('Home', [ 
            'posts' => $posts,
            'counts' =>  $counts
        ]);
    }

    public function homebegin()
    {
        return view('HowBegin');
    }

    public function blogs(Request $request)
    {
        $filters = [
            'title' => $request->title ?? null
        ];
        $posts = Post::ofTitle($filters['title'])->get();
        return view('Blogs', [ 'posts' => $posts ]);
    }

    public function blog(Post $post)
    {
        return view('Blog', [ 'post' => $post ]);
    }

    public function continue()
    {
        return view('Continue');
    }

    public function moreInfo()
    {
        return view('MoreInfo');
    }

    public function storyaboutus()
    {
        return view('StoryAboutUs');
    }

    public function team()
    {
        return view('Team');
    }
}
