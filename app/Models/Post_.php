<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fikry Galih Pratama",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae quos dolorem maxime aliquam. Consequatur voluptatibus dicta ad vitae delectus libero corporis ut nihil fuga temporibus rem, eum quia totam, earum ipsam aliquam. In, illum quisquam. Dolor beatae accusantium maiores quibusdam facilis vel autem quidem enim necessitatibus, voluptates vitae, tenetur distinctio ipsam praesentium dicta dignissimos ut sed dolores quasi quo! Dolorum sit earum consectetur corporis repudiandae magnam impedit voluptas nihil libero eum! Rem odio quaerat animi delectus repellat non et voluptate. "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jono Iskandar",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, aspernatur vel quae temporibus nesciunt deleniti modi facilis optio illum itaque nihil maiores iure impedit dignissimos autem iusto et repellendus sequi officiis exercitationem consectetur? A, soluta tenetur laudantium vel praesentium excepturi quo aliquid, cumque ipsam vitae facere eius omnis porro sed, quaerat fugiat dignissimos corporis magnam aliquam animi! Distinctio ratione voluptates asperiores aperiam non praesentium ab quam inventore ipsam, cupiditate pariatur eveniet quasi commodi vitae quis perferendis fugiat beatae repudiandae explicabo? Suscipit doloremque, modi eligendi recusandae deserunt eum illum voluptatem ducimus autem officia facilis provident pariatur maiores possimus dolore cumque! Id?"
        ],
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
