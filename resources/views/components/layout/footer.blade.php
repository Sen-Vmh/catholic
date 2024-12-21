<style>
    footer a:hover, footer a:focus, footer a:active {
        text-decoration: underline;
    }
</style>

<footer class="bg-primary lg:px-28 md:px-16 px-12 text-secondary">
    <div class="flex flex-row justify-between py-6">
        <!-- Logo and Social Media Links -->
        <div class="flex-col flex justify-between">
            <div class="w-[280px]">
                <x-custom.logo></x-custom.logo>
            </div>
            <div class="flex gap-[15px]">
                <a class="hover:text-[#ff5c39] active:text-[#ff5c39]/70 transition" href="https://www.instagram.com"
                   target="_blank"
                   aria-label="Instagram">
                    <x-phosphor-instagram-logo-bold class="h-10"></x-phosphor-instagram-logo-bold>
                </a>
                <a class="hover:text-[#ff5c39] active:text-[#ff5c39]/70 transition" href="https://www.twitter.com"
                   target="_blank"
                   aria-label="Twitter">
                    <x-phosphor-x-logo-bold class="h-10"></x-phosphor-x-logo-bold>
                </a>
                <a class="hover:text-[#ff5c39] active:text-[#ff5c39]/70 transition" href="https://www.facebook.com"
                   target="_blank"
                   aria-label="Facebook">
                    <x-phosphor-facebook-logo-bold class="h-10"></x-phosphor-facebook-logo-bold>
                </a>
                <a class="hover:text-[#ff5c39] active:text-[#ff5c39]/70 transition" href="https://www.linkedin.com"
                   target="_blank"
                   aria-label="LinkedIn">
                    <x-phosphor-linkedin-logo-bold class="h-10"></x-phosphor-linkedin-logo-bold>
                </a>
            </div>
        </div>

        <!-- Mobile Links -->
        <div class="lg:hidden space-y-3 flex-col flex">
            <a href="{{ route('home') }}" class="font-bold">About</a>
            <a href="{{ route('learn.index') }}" class="font-bold">Study</a>
            <a href="{{ route('quiz.index') }}" class="font-bold">Quizzes</a>
            <a href="{{ route('profile.dashboard') }}" class="font-bold">Profile</a>
        </div>

        <!-- Desktop Links -->
        <div class="hidden lg:block">
            <h3 class="font-bold"><a href="{{ route('home') }}">About</a></h3>
            <ul class="pt-4 space-y-4">
                <li><a href="#beginnings">Beginnings</a></li>
                <li><a href="#history">History</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <div class="hidden lg:block">
            <h3 class="font-bold"><a href="{{ route('learn.index') }}">Study</a></h3>
            <ul class="pt-4 space-y-4">
                <li><a href="{{ route('learn.church-history') }}">Church History</a></li>
                <li><a href="{{ route('learn.prayers') }}">Prayer</a></li>
                <li><a href="{{ route('learn.sacraments') }}">Sacraments</a></li>
                <li><a href="{{ route('learn.saints') }}">Saints</a></li>
            </ul>
        </div>

        <div class="hidden lg:block">
            <h3 class="font-bold"><a href="{{ route('quiz.index') }}">Quizzes</a></h3>
            <ul class="pt-4 space-y-4">
                <li><a href="{{ route('quiz.index') }}">Category</a></li>
                <li><a href="{{ route('quiz.take-quiz') }}">Random Quiz</a></li>
            </ul>
        </div>

        <div class="hidden lg:block">
            <h3 class="font-bold"><a href="{{ route('profile.dashboard') }}">Profile</a></h3>
            <ul class="pt-4 space-y-4">
                <li><a href="{{ route('profile.progress') }}">Progress</a></li>
            </ul>
        </div>
    </div>

    <hr class="border-secondary/20">
    <div class="text-center sm:text-start gap-5 py-4 flex sm:flex-row flex-col">
        <p class="font-bold">Contact</p>
        <p><a href="mailto:help@cathoquiz.org">help@cathoquiz.org</a></p>
        <p><a href="tel:+32123456789">+32 123 45 67 89</a></p>
        <p class="sm:ms-auto">© 2024 - CathoQuiz</p>
    </div>
</footer>

