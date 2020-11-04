<?php

namespace App\Http\Controllers;

class PostsController
{
    public function show($post)
    {
        
            $posts = [
                'my-first-post' => 'Hello,this',
                'my-second-post' => 'Now. i am getting'
            ];
            
            if (! array_key_exists($post, $posts)){
                    abort(404, 'Sorry ,post was not found');
            }
            
            return view('post', [
                'post' => $posts [$post] ?? 'nothing here'
            ]);
        //    // return $name;
        
            // return view('test', [
            //     'name' => request('name')
            // ]);
        
    }
}