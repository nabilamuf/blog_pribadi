<?php

namespace App\Models;



class Post_
{
    private static $blog_post =[
        [
            "title"=>"Judul Post Pertama",
            "slug" =>"judul-post-pertama",
            "author"=> "nabila mufida",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut rem magnam facilis architecto dolor ipsa eligendi molestiae, repellat excepturi beatae alias, sapiente minus autem veniam earum sequi unde consequuntur laudantium?"
        ],
    
        [
            "title"=>"Judul Post Kedua",
            "slug"=>"judul-post-kedua",
            "author"=> "nayla ulfa",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nobis repellat optio nemo necessitatibus natus dolor cum incidunt, quibusdam aut quasi eveniet magni illo exercitationem maxime debitis deleniti laudantium ad aspernatur voluptate? Alias assumenda debitis explicabo nobis incidunt illum eius doloribus ipsum blanditiis officiis accusamus dicta aut qui nihil vel sunt esse labore consectetur vero fuga veritatis inventore, iusto, reiciendis minima? Tempore, eveniet vero. Eos officia neque, nisi at necessitatibus minima beatae saepe deleniti facere eaque adipisci quaerat optio atque doloremque laborum earum omnis eius! Iste ratione alias magnam provident maiores numquam sapiente qui consequuntur fugit explicabo, odit itaque nulla."
        ]
    
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts -> firstWhere('slug',$slug);
    }
}
