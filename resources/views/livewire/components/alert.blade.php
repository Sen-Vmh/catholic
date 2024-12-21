<div class="fixed bottom-4 right-4 z-50 space-y-2">
    @foreach($messages as $index => $item)
        <div
            x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => { show = false; $wire.removeMessage({{ $index }}) }, 10000)"
            class="rounded-lg p-4 shadow-md flex items-center gap-2 min-w-[200px]
                @switch($item['type'])
                    @case('success')
                        bg-green-100 text-green-800 border-l-4 border-green-600
                        @break
                    @case('error')
                        bg-red-100 text-red-800 border-l-4 border-red-600
                        @break
                    @case('warning')
                        bg-yellow-100 text-yellow-800 border-l-4 border-yellow-600
                        @break
                    @default
                        bg-blue-100 text-blue-800 border-l-4 border-blue-600
                @endswitch"
        >
            <p class="flex-1">{{ $item['message'] }}</p>

            <button
                wire:click="removeMessage({{ $index }})"
                class="text-gray-500 hover:text-gray-700"
                aria-label="Close"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    @endforeach
</div>
