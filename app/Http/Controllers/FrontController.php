<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Modules\Page\Entities\Page;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function page($slug)
    {
        $page = Page::where('slug', '=', $slug)->first();
        if(!$page) {
            abort(404);
        }
        return view('template.' . $page->template, compact('page'))->withTitle($page->title);
    }
}
