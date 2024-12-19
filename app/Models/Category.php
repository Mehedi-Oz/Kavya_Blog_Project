<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\select;

class Category extends Model
{
    use HasFactory;

    public static $category, $image, $imageNewName, $directory, $imgUrl;

    public static function saveCategory($request)
    {
        $customMessages = [
            'category_name.required' => 'Please enter category name.',
            'image.required' => 'Please upload an image.'
        ];

        $request->validate([
            'category_name' => 'required',
            'image' => 'required'
        ], $customMessages);


        self::$category = new Category();
        self::$category->category_name = $request->category_name;
        self::$category->image = self::saveImage($request);
        self::$category->save();
    }

    public static function saveImage($request)
    {
        self::$image = $request->file('image');

        if (self::$image) {
            self::$imageNewName = 'Category-' . rand() . '.' . self::$image->getClientOriginalExtension();
            self::$directory = 'admin-asset/upload-images/category/';
            self::$image->move(self::$directory, self::$imageNewName);
            return self::$imgUrl = self::$directory . self::$imageNewName;
        }

        return null;
    }


    public static function updateCategory($request)
    {
        self::$category = Category::find($request->id);
        self::$category->category_name = $request->category_name;

        if ($request->file('image')) {
            if (self::$category->image && file_exists(self::$category->image)) {
                unlink(self::$category->image);
            }
            self::$category->image = self::saveImage($request);
        }

        self::$category->save();
    }

    public static function statusCategory($id)
    {
        self::$category = Category::find($id);

        if (self::$category->status == 1) {
            self::$category->status = 0;
        } else {
            self::$category->status = 1;
        }

        self::$category->save();
    }

    public static function deleteCategory($request)
    {
        self::$category = Category::find($request->id);

        if (self::$category) {
            if (self::$category->image && file_exists(self::$category->image)) {
                unlink(self::$category->image);
            }
        }

        self::$category->delete();
    }

}
