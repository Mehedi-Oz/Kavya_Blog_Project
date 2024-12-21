<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Author;

class Blog extends Model
{
    use HasFactory;

    public static $blog, $image, $imageNewName, $directory, $imgUrl, $saveSlug;

    public static function saveBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->category_id = $request->category_id;
        self::$blog->author_id = $request->author_id;
        self::$blog->title = $request->title;
        self::$blog->slug = self::createSlug($request);
        self::$blog->description = $request->description;
        self::$blog->image = self::saveImage($request);
        self::$blog->save();
    }

    public static function createSlug($request)
    {
        if (isset($request->id)) {
            $blog = Blog::find($request->id);
            if ($request->slug) {
                self::$saveSlug = $request->slug;
            } else {
                self::$saveSlug = $blog->slug;
            }
        } else {
            if ($request->slug) {
                self::$saveSlug = $request->slug;
            } else {
                self::$saveSlug = $request->title;
            }
        }

        return preg_replace('/[^A-Za-z0-9-]+/', '-', self::$saveSlug);
    }


    public static function saveImage($request)
    {
        self::$image = $request->file('image');
        if (self::$image) {
            self::$imageNewName = 'Blog-' . rand() . '.' . self::$image->getClientOriginalExtension();
            self::$directory = 'admin-asset/upload-images/blog/';
            self::$image->move(self::$directory, self::$imageNewName);
            return self::$imgUrl = self::$directory . self::$imageNewName;
        }
        return null;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsto(Author::class);
    }

    public static function statusBlog($id)
    {
        self::$blog = Blog::find($id);

        if (self::$blog->status == 1) {
            self::$blog->status = 0;
        } else {
            self::$blog->status = 1;
        }
        self::$blog->save();
    }

    public static function updateBlog($request)
    {
        self::$blog = Blog::find($request->id);
        self::$blog->category_id = $request->category_id;
        self::$blog->author_id = $request->author_id;
        self::$blog->title = $request->title;
        self::$blog->slug =  self::createSlug($request);
        self::$blog->description = $request->description;

        if ($request->file('image')) {
            if (self::$blog->image && file_exists(self::$blog->image)) {
                unlink(self::$blog->image);
            }
            self::$blog->image = self::saveImage($request);
        }
        self::$blog->save();
    }

    public static function deleteBlog($request)
    {
        self::$blog = Blog::find($request->id);

        if (self::$blog) {
            if (self::$blog->image && file_exists(self::$blog->image)) {
                unlink(self::$blog->image);
            }
        }
        self::$blog->delete();
    }
}
