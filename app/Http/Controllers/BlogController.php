<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
//      $blogs = Blog::with('category:id,category_name', 'author:id,author_name,image')->orderby('title', 'asc')->get();
//      return $blogs;
        return view('frontend.home.home', [
            'blogs' => Blog::with('category:id,category_name', 'author:id,author_name,image')->orderby('title', 'asc')->get()
        ]);
    }

    public function addBlog()
    {
        return view('admin.blog.add-blog', [
            'categories' => Category::where('status', 1)->orderby('category_name', 'asc')->get(),
            'authors' => Author::where('status', 1)->orderby('author_name', 'asc')->get()
        ]);
    }

    public function saveBlog(Request $request)
    {
        Blog::saveBlog($request);
        return back()->with('message', 'Blog added successfully!');
    }

    public function editBlog($id)
    {
        return view('admin.blog.edit-blog', [
            'blog' => Blog::find($id),
            'categories' => Category::where('status', 1)->orderby('category_name', 'asc')->get(),
            'authors' => Author::where('status', 1)->orderby('author_name', 'asc')->get()
        ]);
    }

    public function manageBlog()
    {
//        $blog = Blog::with('category:id,category_name', 'author:id,author_name')->get();
//        return $blog;
        return view('admin.blog.manage-blog', [
            'blogs' => Blog::with('category:id,category_name', 'author:id,author_name')->orderby('title', 'asc')->get()
        ]);
    }

    public function updateBlog(Request $request)
    {
        Blog::updateBlog($request);
        return back()->with('message', 'Blog updated successfully!');
    }

    public function deleteBlog(Request $request)
    {
        Blog::deleteBlog($request);
        return back()->with('message', 'Blog deleted successfully!');
    }

    public function statusBlog($id)
    {
        Blog::statusBlog($id);
        return back();
    }

    public function detailsBlog($id)
    {
        /*        $blog = Blog::with('category:id,category_name', 'author:id,author_name,image')->find($id);
                return $blog;*/

        $blogDetails = Blog::find($id);

        $blogCategory = $blogDetails->category_id;
        $relatedBlogs = Blog::where('category_id', $blogCategory)->get();
        $comment = Comment::where('blog_id', $blogDetails->id)->get();

//        dd([
//            'blog_id' => $blogDetails->id,
//            'comments' => $comment
//        ]);

//        return $comment;
        return view('frontEnd.home.details-blog', [
            'blog' => Blog::with('category:id,category_name', 'author:id,author_name,image')->find($id),
            'relatedBlogs' => $relatedBlogs,
            'comments' => $comment
        ]);
    }
}
