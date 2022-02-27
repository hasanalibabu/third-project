<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Student;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogs;
    protected $blog;

    public function index()
    {
        return view('add-blog');
    }

    public function manage (Request $request)
    {
        $this->blog = new Blog();
        $this->blog->title = $request->title;
        $this->blog->author = $request->author;
        $this->blog->description = $request->description;
        $this->blog->save();

        return redirect()->back()->with('massage', 'Student Info save successfully');
    }
    public function manages()
    {
        $this->blogs = blog::orderBy('id', 'desc')->get();
        return view('manage-blog', ['blogs' =>$this->blogs]);
    }
    public function edit($id)
    {
        $this->blog = blog::find($id);
        return view('edit-blog', ['blog' =>$this->blog]);
    }
    public function update(Request $request, $id)
    {
        $this->blog = Blog::find($id);
        $this->blog->title = $request->title;
        $this->blog->author = $request->author;
        $this->blog->description = $request->description;
        $this->blog->save();

        return redirect('/manage-blog')->with('massage', 'blog info update successfully');
    }
    public function delete($id)
    {
        $this->blog = Blog::find($id);
        $this->blog->delete();
        return redirect('/manage-blog')->with('massage', 'blog info delete successfully');
    }
}
