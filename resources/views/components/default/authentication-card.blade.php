<div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-10 backdrop-blur-[3px]">
    <div class="w-full max-w-md bg-[#FFECD1]/80 shadow-md overflow-hidden sm:rounded-lg mx-auto">
        <a href="{{ route("home") }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 120">
                <!-- Flipped C in accent color -->
                <path d="M85 35 A25 25 0 0 0 85 85"
                      fill="none"
                      stroke="#ff5c39"
                      stroke-width="20"
                      stroke-linecap="round"/>

                <!-- atho text -->
                <text x="95" y="75" font-family="Arial Black, sans-serif" font-size="40" fill="#15616D">atho</text>

                <!-- Q with diagonal tail -->
                <path d="M222 35 A25 25 0 1 1 222 85 M237 75 L252 90"
                      fill="none"
                      stroke="#ff5c39"
                      stroke-width="20"
                      stroke-linecap="round"/>

                <!-- uiz text -->
                <text x="272" y="75" font-family="Arial Black, sans-serif" font-size="40" fill="#15616D">uiz</text>
            </svg>
        </a>
        <div class="px-6 py-4">
            {{ $slot }}
        </div>
    </div>
</div>

