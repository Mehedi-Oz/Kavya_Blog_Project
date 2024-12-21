<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Comment extends Model
{
    use HasFactory;

    public static $comment;

    public static function saveComment($request)
    {
        self::$comment = new Comment();
        self::$comment->customer_id = Session::get('customerId');
        self::$comment->blog_id = $request->blog_id;
        self::$comment->comment = $request->comment;
        self::$comment->save();
    }
}
