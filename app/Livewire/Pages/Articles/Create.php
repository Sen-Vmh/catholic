<?php

namespace App\Livewire\Pages\Articles;

use App\Models\Article;
use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

#[Layout('layouts.catho-quiz')]
class Create extends Component
{
    use WithFileUploads;

    public $title = '';
    public $content = '';
    public $excerpt = '';
    public $featured_image;
    public $category_id = '';

    protected $rules = [
        'title' => 'required|min:3|max:255',
        'content' => 'required|min:50',
        'excerpt' => 'nullable|max:255',
        'featured_image' => 'nullable|image|max:1024', // max 1MB
        'category_id' => 'nullable|exists:categories,id'
    ];

    public function save()
    {
        $validatedData = $this->validate();

        // Handle image upload if present
        if ($this->featured_image) {
            $validatedData['featured_image'] = $this->featured_image->store('articles', 'public');
        }

        // Add additional data
        $validatedData['slug'] = Str::slug($this->title);
        $validatedData['is_published'] = true;
        $validatedData['published_at'] = now();

        Article::create($validatedData);

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Article created successfully!'
        ]);

        return redirect()->route('learn.index');
    }

    public function getCategoriesProperty()
    {
        return Category::orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.pages.articles.create', [
            'categories' => $this->categories
        ]);
    }
}
