<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    // show all articles
    public function index()
    {
        $articles = DB::table('articles')->latest()->limit(5)->get();
        return view('articles.index', ['articles' => $articles]);
    }

    // show all articles by id
    public function show($id)
    {
        $article = DB::table('articles')->find($id); // the id is determined by the number the user enters in the url

        if ($article) {
            return view('articles.show', ['article' => $article]); // the specific article which is indexed by id is accessible in the blog page
        } else {
            abort(404);
        }
    }

    // show all articles of a specific category
    public function category($slug)
    {
        $category = DB::table('categories')
            ->where('slug', '=', $slug)
            ->first();
        if ($category) {
            return view('articles.category', ['category' => $category]);
        } else {
            abort(404);
        }
    }

    // show all articles of a specific tag
    public function tag($slug)
    {
        $tag = DB::table('tags')
            ->where('slug', '=', $slug)
            ->first();
        if ($tag) {
            return view('articles.tag', ['tag' => $tag]);
        } else {
            abort(404);
        }
    }

    // show either the terms of use or the privacy policy
    public function legal($subsection)
    {
        return view('legal.legal', ['subsection' => $subsection]);
    }

    // redirect the user to a specific view(article or articles of a certain category/tag) based on what 'input' field they submitted
    // This is done through a post request
    public function search(Request $request)
    {
        if ($request->id) {
            $id = $request->id; // stores the id entered and submitted
            return redirect('/article/' . $id); // redirects the user to this view
        } else if ($request->category) {
            $category = $request->category; // stores the category entered and submitted
            $catergory_slug = convertTitleToSlug($category); // converts the title to a slug(hello world -> hello-world)
            return redirect('/category/' . $catergory_slug); // redirects the user to this view
        } else if ($request->tag) {
            $tag = $request->tag; // stores the tag entered and submitted
            $tag_slug = convertTitleToSlug($tag); // converts the title to a slug(hello world -> hello-world)
            return redirect('/tag/' . $tag_slug); // redirects the user to this view
        }
        return view('articles.search');
    }
}
