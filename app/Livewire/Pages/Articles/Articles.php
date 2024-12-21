<?php

namespace App\Livewire\Pages\Articles;

use App\Models\Article as ArticleModel;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.catho-quiz')]
class Articles extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.pages.articles.articles', [
            'featuredArticles' => $this->getFeaturedArticles(),
            'articles' => $this->getArticles()
        ]);
    }

    public function getFeaturedArticles()
    {
        return ArticleModel::query()
            ->where('is_published', true)
            ->latest('published_at')
            ->take(5)
            ->get();
    }

    public function getArticles()
    {
        return ArticleModel::query()
            ->where('is_published', true)
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('title', 'like', '%' . $this->search . '%')
                        ->orWhere('excerpt', 'like', '%' . $this->search . '%');
                });
            })
            ->latest('published_at')
            ->paginate($this->perPage);
    }
}
