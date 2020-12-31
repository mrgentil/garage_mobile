<?php

namespace App\Http\Controllers;

use App\Helpers\Pageable;
use App\Repositories\BlogRepository;

class NewsController extends Controller
{
    use Pageable;
    /**
     * @var BlogRepository
     */
    private $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {
        $news = $this->blogRepository->getLatest(10);
        //$page = $this->getPageInfo('nos-news');
        $latest_posts = $this->blogRepository->getLatest(3);
        $categories = $this->blogRepository->getCategories();
        return view('news.index', compact('news', 'latest_posts', 'categories'));
    }

    public function show(string $slug)
    {
        $news = $this->blogRepository->getPost($slug);
        $latest_posts = $this->blogRepository->getLatest(3);
        $categories = $this->blogRepository->getCategories();
        $related_posts = $this->blogRepository->getRelatedPosts($slug, $news->category_id);
        return view('news.show', compact('news', 'latest_posts', 'categories', 'related_posts'));
    }
}
