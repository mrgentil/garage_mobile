<?php


namespace App\Repositories;

use App\Post;
use TCG\Voyager\Models\Category;

class BlogRepository
{
    public function getLatest(?int $limit = 10)
    {
        return Post::query()
            ->with(['category', 'user'])
            ->orderBy('id', 'desc')
            ->where('status', 'published')
            ->paginate($limit);
    }

    public function getPost(string $slug)
    {
        $id = explode('-', $slug)[0];
        $slug = substr($slug, strpos($slug, explode('-', $slug)[1]));
        return Post::query()
            ->with('category')
            ->where('status', 'published')
            ->where('id', $id)
            ->where('slug', $slug)
            ->firstOrFail();
    }

    public function getCategories()
    {
        return Category::query()->where('order', 1)->get();
    }

    public function getRelatedPosts(string $slug, string $category_id, ?int $limit = 4)
    {
        $id = $this->getPostIdFromSlug($slug);

        return Post::query()
            ->where('status', 'PUBLISHED')
            ->where('category_id', $category_id)
            ->where('id', '<>', $id)
            ->orderBy('id', 'desc')
            ->limit($limit)->get();
    }

    private function getPostIdFromSlug(string $slug)
    {
        return $id = explode('-', $slug)[0];
    }
}
