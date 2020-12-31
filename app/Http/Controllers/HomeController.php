<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BlogRepository;

class HomeController extends Controller
{
    /**
     * @var BlogRepository
     */
    private $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = $this->blogRepository->getLatest(10);
        return view('home', compact('news'));
    }
}
