<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public static $author, $image, $imageNewName, $directory, $imgUrl;

    public static function saveAuthor($request)
    {
        $customMessages = [
            'author_name.required' => 'Please enter author name.',
            'image.required' => 'Please upload an image.'
        ];

        $request->validate([
            'author_name' => 'required',
            'image' => 'required'
        ], $customMessages);

        self::$author = new Author();
        self::$author->author_name = $request->author_name;
        self::$author->image = self::saveImage($request);
        self::$author->save();
    }

    public static function saveImage($request)
    {
        self::$image = $request->file('image');
        if (self::$image) {
            self::$imageNewName = 'Author-' . rand() . '.' . self::$image->getClientOriginalExtension();
            self::$directory = 'admin-asset/upload-images/author/';
            self::$image->move(self::$directory, self::$imageNewName);
            return self::$imgUrl = self::$directory . self::$imageNewName;
        }
        return null;
    }

    public static function statusAuthor($id)
    {
        self::$author = Author::find($id);
        if (self::$author->status == 1) {
            self::$author->status = 0;
        } else {
            self::$author->status = 1;
        }
        self::$author->save();
    }

    public static function updateAuthor($request)
    {
        self::$author = Author::find($request->id);
        self::$author->author_name = $request->author_name;

        if (self::$author->image) {
            if (self::$author->image && file_exists(self::$author->image)) {
                unlink(self::$author->image);
            }
            self::$author->image = self::saveImage($request);
        }
        self::$author->save();
    }

    public static function deleteAuthor($request)
    {
        self::$author = Author::find($request->id);

        if (self::$author) {
            if (self::$author->image && file_exists(self::$author->image)) {
                unlink(self::$author->image);
            }
        }
        self::$author->delete();
    }
}
