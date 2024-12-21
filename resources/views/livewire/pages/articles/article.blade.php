<x-layout.section class="bg-secondary/60 justify-center">
    <div class="flex flex-col lg:flex-row gap-8 w-full">
        {{-- Main Article Content --}}
        <article class="lg:flex-grow">
            {{-- Article Header --}}
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-[#15616D] mb-4">
                    {{ $article->title }}
                </h1>
                <div class="text-gray-500 flex items-center gap-2">
                    @if($article->category)
                        <span class="bg-primary/10 text-primary px-3 py-1 rounded-full text-sm">
                {{ $article->category->name }}
            </span>
                    @endif
                    <span>Published on {{ $article->published_at->format('F d, Y') }}</span>
                </div>
            </div>

            {{-- Featured Image --}}
            @if ($article->featured_image)
                <div class="mb-8">
                    <img
                        src="{{ $article->featured_image }}"
                        alt="{{ $article->title }}"
                        class="w-full h-64 object-cover rounded-lg shadow-md"
                    >
                </div>
            @endif

            {{-- Article Excerpt --}}
            @if ($article->excerpt)
                <div class="text-xl text-gray-600 mb-8 border-l-4 border-[#15616D] pl-4">
                    {{ $article->excerpt }}
                </div>
            @endif

            {{-- Article Content --}}
            <div class="prose max-w-none">
                {!! $article->content !!}
            </div>

            {{-- Back Button --}}
            <div class="mt-12 border-t pt-8 flex">
                <a href="{{ route('learn.index') }}"
                   class="inline-flex items-center text-[#15616D] hover:text-[#0d404a] font-medium">
                    <span>← Back to Articles</span>
                </a>
                @if (auth()->user() && auth()->user()->isAdmin())
                    <div class="ms-auto space-x-2">
                        <x-custom.button
                            :outline="true"
                            href="{{ route('learn.edit', $article->slug) }}"
                        >
                            Modify
                        </x-custom.button>

                        <x-custom.button
                            type="accent"
                            wire:click="delete"
                            wire:confirm="Are you sure you want to delete this article?"
                        >
                            Delete
                        </x-custom.button>
                    </div>
                @endif
            </div>
        </article>

        {{-- Featured Articles Sidebar --}}
        <aside class="lg:w-72 shrink-0">
            <div class="sticky top-24">
                <h2 class="text-xl font-bold text-[#15616D] mb-4">Featured Articles</h2>

                <div class="space-y-4">
                    @foreach($featuredArticles as $featuredArticle)
                        <div class="group">
                            <a href="{{ route('learn.show', $featuredArticle->slug) }}"
                               class="block hover:bg-white/50 rounded-lg p-3 transition">
                                @if($featuredArticle->featured_image)
                                    <img
                                        src="{{ $featuredArticle->featured_image }}"
                                        alt="{{ $featuredArticle->title }}"
                                        class="w-full h-24 object-cover rounded-lg mb-2"
                                    >
                                @endif
                                <h3 class="font-semibold text-[#15616D] group-hover:text-[#0d404a] line-clamp-2 text-sm">
                                    {{ $featuredArticle->title }}
                                </h3>
                                @if($featuredArticle->excerpt)
                                    <p class="text-xs text-gray-600 mt-1 line-clamp-2">
                                        {{ $featuredArticle->excerpt }}
                                    </p>
                                @endif
                                <span class="text-xs text-gray-500 mt-1 block">
                                    {{ $featuredArticle->published_at->format('M d, Y') }}
                                </span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>
</x-layout.section>

