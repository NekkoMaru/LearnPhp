<?php
namespace App\Controllers;

class PublicController {
    public function index(){
        $name = 'Kaspar';
        view('index', compact('name'));
        //view('index', ['name'=>$name]);
    }

    public function about(){
        view('about');
    }
}