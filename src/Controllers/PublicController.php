<?php
namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PublicController {
    public function index() {
        $posts = Post::all();
        //var_dump($posts);

        $users = User::all();
        //var_dump($users);

        $name = 'Artjom';
        view('index', compact('posts'));
    }

    public function about() {
        view('about');
    }

    public function form() {

        view('form');
    }

    public function answer() {
        var_dump($_POST);
    }

    public function getAnswer() {
        echo "get request";
    }
}