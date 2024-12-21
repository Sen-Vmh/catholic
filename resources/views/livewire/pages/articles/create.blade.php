<x-layout.section class="bg-secondary/60">
    <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md p-8">
        <h1 class="text-3xl font-bold text-primary mb-8">Create New Article</h1>

        <form wire:submit="save" class="space-y-8">
            {{-- Title and Category Row --}}
            <div class="grid md:grid-cols-2 gap-6">
                {{-- Title --}}
                <div class="space-y-2">
                    <x-label for="title" value="Title" class="text-gray-700"/>
                    <x-input
                        id="title"
                        type="text"
                        wire:model="title"
                        class="w-full"
                        placeholder="Enter article title"
                        required
                    />
                    @error('title')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Category --}}
                <div class="space-y-2">
                    <x-label for="category" value="Category" class="text-gray-700"/>
                    <select
                        id="category"
                        wire:model="category_id"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-[#15616D] focus:ring-[#15616D]"
                    >
                        <option value="">Select a category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- Excerpt --}}
            <div class="space-y-2">
                <x-label for="excerpt" value="Excerpt" class="text-gray-700"/>
                <div class="relative">
                    <textarea
                        id="excerpt"
                        wire:model="excerpt"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-[#15616D] focus:ring-[#15616D]"
                        rows="3"
                        placeholder="Brief summary of the article"
                    ></textarea>
                    <span class="absolute bottom-2 right-2 text-xs text-gray-400">Optional</span>
                </div>
                @error('excerpt')
                <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Content --}}
            <div class="space-y-2">
                <x-label for="content" value="Content" class="text-gray-700"/>
                <textarea
                    id="content"
                    wire:model="content"
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-[#15616D] focus:ring-[#15616D]"
                    rows="12"
                    placeholder="Write your article content here..."
                    required
                ></textarea>
                @error('content')
                <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- Featured Image --}}
            <div class="space-y-2">
                <x-label for="featured_image" value="Featured Image" class="text-gray-700"/>
                <div class="flex items-start space-x-4">
                    <div class="flex-1">
                        <div
                            class="relative border-2 border-dashed border-gray-300 rounded-lg p-6 hover:border-[#15616D] transition-colors">
                            <input
                                type="file"
                                id="featured_image"
                                wire:model="featured_image"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                accept="image/*"
                            />
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                     viewBox="0 0 48 48">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <p class="mt-1 text-sm text-gray-600">Click to upload or drag and drop</p>
                                <p class="mt-1 text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                        @error('featured_image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    @if ($featured_image)
                        <div class="w-40">
                            <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden bg-gray-100">
                                <img
                                    src="{{ $featured_image->temporaryUrl() }}"
                                    class="w-full h-full object-cover"
                                    alt="Preview"
                                >
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Submit Button --}}
            <div class="flex items-center justify-end space-x-4 pt-4 border-t">
                <a href="{{route('learn.index')}}">
                    <x-custom.button
                        type="button"
                        :outline="true"
                    >
                        Cancel
                    </x-custom.button>
                </a>
                <x-custom.button type="submit">
                    Publish Material
                </x-custom.button>
            </div>
        </form>
    </div>
</x-layout.section>
