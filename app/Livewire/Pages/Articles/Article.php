<?php

namespace App\Livewire\Pages\Articles;

use App\Models\Article as ArticleModel;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.catho-quiz')]
class Article extends Component
{
    public ArticleModel $article;

    public function mount($slug)
    {
        $this->article = ArticleModel::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
    }

    public function delete()
    {
        $this->article->delete();

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Article deleted successfully!'
        ]);

        return redirect()->route('learn.index');
    }

    public function render()
    {
        return view('livewire.pages.articles.article', [
            'featuredArticles' => $this->getFeaturedArticles()
        ]);
    }

    public function getFeaturedArticles()
    {
        return ArticleModel::where('id', '!=', $this->article->id)
            ->where('is_published', true)
            ->latest('published_at')
            ->take(4)
            ->get();
    }
}
