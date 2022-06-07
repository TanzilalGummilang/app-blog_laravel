<?php

namespace App\Models;

class Post
{
    private static $blogPosts = [
        [
            'title' => "Judul Post Pertama",
            'slug' => "judul-post-pertama",
            'author' => "Penulis ke 1",
            'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, mollitia quidem nulla eveniet dolore qui labore quos impedit, expedita, earum corporis magnam magni cupiditate. Facere doloribus dolor optio quos. Vel ea repellendus ad aut similique, ut doloremque possimus omnis fugit eum facilis provident, animi sit corporis incidunt quia cumque libero eius accusamus enim, officia debitis nihil. Distinctio necessitatibus accusamus odio hic quis eligendi et aspernatur doloremque, pariatur, possimus tempora laboriosam dignissimos amet iste perferendis non eveniet rerum blanditiis quisquam vero?"
        ],
        [
            'title' => "Judul Post Kedua",
            'slug' => "judul-post-kedua",
            'author' => "Penulis ke 2",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis dolor quo, est odio pariatur a repellendus ut sunt magni, dicta error fugiat soluta culpa. Corporis, nostrum officia. Esse est nihil dolorum modi quisquam sit impedit mollitia qui autem consectetur quam, explicabo cupiditate, odio quos architecto. Dicta commodi minima laudantium reiciendis vel quia harum debitis cumque corporis, sunt fugiat perferendis? Ducimus illum enim, vero sapiente possimus quo repellat? Minus natus cum asperiores, vitae iste dolor, molestias, incidunt beatae voluptas at recusandae! Itaque dolores recusandae doloremque iure voluptates. Cupiditate repellat sit labore, earum perspiciatis voluptatem, qui doloremque eaque libero est quaerat voluptatum!"
        ]
    ];

    public static function allPost()
    {
        return collect(self::$blogPosts);
    }

    public static function findPost($slug)
    {
        $posts = static::allPost();

        // $tempPost = [];
        // foreach($posts as $post){
        //     if($post['slug'] === $slug){
        //         $tempPost = $post;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
