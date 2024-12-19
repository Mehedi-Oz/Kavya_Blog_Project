<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Author;

class AuthorController extends Controller
{
    public function addAuthor()
    {
        return view('admin.author.add-author');
    }

    public function saveAuthor(Request $request)
    {
        Author::saveAuthor($request);
        return back()->with('message', 'Author added successfully!');
    }

    public function manageAuthor()
    {
        return view('admin.author.manage-author', [
            'authors' => Author::all()
        ]);
    }

    public function editAuthor($id)
    {
//        return Author::find($id);
        return view('admin.author.edit-author', [
            'author' => Author::find($id)
        ]);
    }

    public function statusAuthor($id)
    {
        Author::statusAuthor($id);
        return back();
    }

    public function updateAuthor(Request $request)
    {
        Author::updateAuthor($request);
        return back()->with('message', 'Author updated successfully!');
    }

    public function deleteAuthor(Request $request)
    {
        Author::deleteAuthor($request);
        return back()->with('message', 'Author deleted!');
    }
}
