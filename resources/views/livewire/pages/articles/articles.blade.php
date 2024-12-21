<x-layout.section class=" bg-secondary/75">
    {{-- Featured Articles Section --}}
    <div class="px-20">

        <section class="mb-16">
            <div class="flex justify-between">
                <h2 class="text-3xl font-bold text-[#15616D] mb-8">Latest Articles</h2>
                @if (auth()->user() && auth()->user()->isAdmin())
                    <div class="">
                        <a href="{{route('learn.create')}}">
                            <x-custom.button class="flex items-center"
                                             type="primary"
                                             size="medium"

                            >
                                Create Article
                                <x-heroicon-c-plus class="w-9 ms-2"/>
                            </x-custom.button>
                        </a>
                    </div>
                @endif
            </div>
            <div class=" grid grid-cols-1 lg:grid-cols-3 gap-6
                    ">
                {{-- Main Featured Article --}}
                @if($featuredArticles->isNotEmpty())
                    <div class="lg:col-span-2 row-span-2">
                        <article class="bg-white rounded-lg shadow-md overflow-hidden h-full">
                            <img
                                src="{{ $featuredArticles[0]->featured_image }}"
                                alt="{{ $featuredArticles[0]->title }}"
                                class="w-full h-96 object-cover"
                            >
                            <div class="p-6">
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">
                                    {{ $featuredArticles[0]->title }}
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    {{ $featuredArticles[0]->excerpt }}
                                </p>
                                <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">
                                    {{ $featuredArticles[0]->published_at->format('M d, Y') }}
                                </span>
                                    <a href="{{ route('learn.show', $featuredArticles[0]->slug) }}"
                                       class="text-[#15616D] hover:text-[#0d404a] font-medium">
                                        Read more →
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    {{-- Secondary Featured Articles --}}
                    <div class="lg:col-span-1 space-y-6">
                        @foreach($featuredArticles->skip(1)->take(4) as $article)
                            <article class="bg-white rounded-lg shadow-md overflow-hidden flex">
                                <img
                                    src="{{ $article->featured_image }}"
                                    alt="{{ $article->title }}"
                                    class="w-24 h-24 object-cover"
                                >
                                <div class="p-4 flex-1">
                                    <h3 class="font-semibold text-gray-900 mb-2">
                                        {{ $article->title }}
                                    </h3>
                                    <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-500">
                                        {{ $article->published_at->format('M d, Y') }}
                                    </span>
                                        <a href="{{ route('learn.show', $article->slug) }}"
                                           class="text-[#15616D] hover:text-[#0d404a]">
                                            Read →
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>

        {{-- All Articles Section --}}
        <section>
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold text-[#15616D]">All Articles</h2>
                <div class="flex items-center gap-4">
                    <input
                        wire:model.live="search"
                        type="search"
                        placeholder="Search articles..."
                        class="rounded-lg border-gray-300 shadow-sm focus:ring-[#15616D] focus:border-[#15616D]"
                    >
                    <select
                        wire:model.live="perPage"
                        class="rounded-lg border-gray-300 shadow-sm focus:ring-[#15616D] focus:border-[#15616D]"
                    >
                        <option value="10">10 per page</option>
                        <option value="25">25 per page</option>
                        <option value="50">50 per page</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($articles as $article)
                    <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                        @if ($article->featured_image)
                            <img
                                src="{{ $article->featured_image }}"
                                alt="{{ $article->title }}"
                                class="w-full h-48 object-cover"
                            >
                        @endif
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">
                                {{ $article->title }}
                            </h3>
                            @if ($article->excerpt)
                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    {{ $article->excerpt }}
                                </p>
                            @endif
                            <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500">
                                {{ $article->published_at->format('M d, Y') }}
                            </span>
                                <a href="{{ route('learn.show', $article->slug) }}"
                                   class="text-[#15616D] hover:text-[#0d404a] font-medium">
                                    Read more →
                                </a>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500">No articles found.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-8">
                {{ $articles->links() }}
            </div>
        </section>
    </div>
</x-layout.section>
