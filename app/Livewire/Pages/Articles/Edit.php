<?php

namespace App\Livewire\Pages\Articles;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public Article $article;
    public $title;
    public $content;
    public $excerpt;
    public $category_id;
    public $featured_image;

    public function mount($slug)
    {
        $this->article = Article::where('slug', $slug)->firstOrFail();
        $this->title = $this->article->title;
        $this->content = $this->article->content;
        $this->excerpt = $this->article->excerpt;
        $this->category_id = $this->article->category_id;
    }

    public function save()
    {
        $validated = $this->validate([
            'title' => 'required|min:3',
            'content' => 'required',
            'excerpt' => 'nullable',
            'category_id' => 'nullable|exists:categories,id',
            'featured_image' => 'nullable|image|max:1024'
        ]);

        if ($this->featured_image) {
            $validated['featured_image'] = $this->featured_image->store('articles', 'public');
        }

        $this->article->update($validated);

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Article updated successfully!'
        ]);

        return redirect()->route('learn.show', $this->article->slug);
    }

    public function render()
    {
        return view('livewire.pages.articles.edit', [
            'categories' => Category::all()
        ]);
    }
}
