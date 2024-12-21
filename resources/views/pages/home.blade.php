<x-catho-quiz>
    <x-layout.section-hero>
        <x-slot:heroTitle>Welcome to CathoQuiz</x-slot:heroTitle>
        <x-slot:heroDescription>Your journey through Catholic faith and knowledge starts here</x-slot:heroDescription>
        <x-slot:buttonText>Explore!</x-slot:buttonText>
    </x-layout.section-hero>

    {{--   About   --}}

    <x-layout.section class="bg-secondary">
        <x-layout.section-text-image src="{{ asset('images/home/study.jpg') }}" :button="true">
            <x-slot:sectionTitle>
                <div class="items-center">
                    Who we are<span class="text-accent">.</span>
                </div>
            </x-slot:sectionTitle>
            <x-slot:sectionText>
                CathoQuiz is your comprehensive platform for exploring and understanding the Catholic
                faith. Whether you're beginning your journey or deepening your knowledge, our structured learning paths
                and interactive quizzes will guide you through the rich traditions of the Catholic Church.
            </x-slot:sectionText>
            <x-slot:buttonText>
                Explore our content
            </x-slot:buttonText>
        </x-layout.section-text-image>
    </x-layout.section>

    {{--   What we offer   --}}

    <x-layout.section class="bg-secondary/75 justify-center">
        <div class="text-center bl lg:w-[100%] w-[75%]">
            <h2 class="font-bold text-5xl mb-10 text-primary brightness-[80%]">What We Offer<span
                    class="text-accent">.</span></h2>
            <div class="flex lg:flex-row flex-col gap-8 items-center">
                <!-- Item 1 -->
                <div class="text-center">
                    <x-custom.card :outline="true">
                        <x-slot:cardTitle>
                            <h3 class="text-[6rem] font-extrabold text-accent leading-none">1</h3>
                            <x-slot:cardDescription>
                                <h4 class="text-xl font-semibold mt-4">Study</h4>
                                <p class="text-base mt-2">
                                    Join a thriving community of learners who share your passion for the Catholic faith.
                                </p>
                            </x-slot:cardDescription>
                        </x-slot:cardTitle>
                    </x-custom.card>
                </div>
                <!-- Item 2 -->
                <div class="text-center">
                    <x-custom.card :outline="true">
                        <x-slot:cardTitle>
                            <h3 class="text-[6rem] font-extrabold text-accent leading-none">2</h3>
                            <x-slot:cardDescription>
                                <h4 class="text-xl font-semibold mt-4">Quizzes</h4>
                                <p class="text-base mt-2">
                                    Join a thriving community of learners who share your passion for the Catholic faith.
                                </p>
                            </x-slot:cardDescription>
                        </x-slot:cardTitle>
                    </x-custom.card>
                </div>
                <!-- Item 3 -->
                <div class="text-center">
                    <x-custom.card :outline="true">
                        <x-slot:cardTitle>
                            <h3 class="text-[6rem] font-extrabold text-accent leading-none">3</h3>
                            <x-slot:cardDescription>
                                <h4 class="text-xl font-semibold mt-4">Community</h4>
                                <p class="text-base mt-2">
                                    Join a thriving community of learners who share your passion for the Catholic faith.
                                </p>
                            </x-slot:cardDescription>
                        </x-slot:cardTitle>
                    </x-custom.card>
                </div>
            </div>
        </div>
    </x-layout.section>

    {{--   1. Study   --}}

    <x-layout.section class="bg-secondary">
        <x-layout.section-image-text src="{{ asset('images/home/study-section.jpg') }}" :button="true">
            <x-slot:sectionTitle><span class="text-accent">1.</span> Study with Us</x-slot:sectionTitle>
            <x-slot:sectionText>
                Dive into the depths of Catholic teachings and traditions through our carefully curated learning
                resources.
                Whether you're exploring the lives of saints, delving into church history, or understanding the
                sacraments,
                CathoQuiz provides comprehensive paths to guide your journey. Learn at your own pace and grow in faith
                and knowledge.
            </x-slot:sectionText>
            <x-slot:buttonText>
                Start Learning Today
            </x-slot:buttonText>
        </x-layout.section-image-text>
    </x-layout.section>

    {{--   2. quizzes   --}}

    <x-layout.section class="bg-secondary/75 px-6 py-12">
        <div>
            <h2 class="text-center font-bold pb-12 text-5xl text-primary brightness-[80%]">
                <span class="text-accent">2.</span> Explore our quizzes
            </h2>
            <hr>
            <!-- Grid Container -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                <!-- Quiz Cards -->
                <x-custom.img-card class="col-span-1" src="{{ asset('images/quiz/church-history.jpg') }}">
                    <x-slot:cardTitle>
                        Church History
                    </x-slot:cardTitle>
                </x-custom.img-card>
                <x-custom.img-card class="col-span-1" src="{{ asset('images/quiz/prayer.jpg') }}">
                    <x-slot:cardTitle>
                        Prayers
                    </x-slot:cardTitle>
                </x-custom.img-card>
                <x-custom.img-card class="col-span-1" src="{{ asset('images/quiz/sacrament.jpg') }}">
                    <x-slot:cardTitle>
                        Sacraments
                    </x-slot:cardTitle>
                </x-custom.img-card>
                <x-custom.img-card class="col-span-1" src="{{ asset('images/quiz/saint.jpg') }}">
                    <x-slot:cardTitle>
                        Saints
                    </x-slot:cardTitle>
                </x-custom.img-card>
            </div>
        </div>
    </x-layout.section>


    {{--   2. quizzes - random   --}}

    <x-layout.section class="bg-secondary">
        <x-layout.section-text-image src="{{ asset('images/quiz/index-hero.jpg') }}">
            <x-slot:sectionTitle>Feeling adventurous?</x-slot:sectionTitle>
            <x-slot:sectionText>
                Try a random quiz and explore different topics about Catholic faith, prayer,
                sacraments, saints, and more. Each quiz is a new challenge waiting for you!
                <div class="mt-12 items-center hidden lg:flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" class="text-accent animate-bounce">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5 12h14m0 0l-6-6m6 6l-6 6"/>
                    </svg>
                </div>
            </x-slot:sectionText>
        </x-layout.section-text-image>
    </x-layout.section>


    {{--   3. Community   --}}

    <x-layout.section class="bg-secondary/75">
        <x-layout.section-image-text src="{{ asset('images/home/community-section.jpg') }}" :button="true"
                                     reverse="true">
            <x-slot:sectionTitle><span class="text-accent">3.</span> Join Our Community</x-slot:sectionTitle>
            <x-slot:sectionText>
                Become part of a vibrant community that shares your faith journey. Discuss insights, ask questions,
                and grow together in knowledge and spirituality. Our platform offers a safe space to connect with
                like-minded
                learners and exchange ideas.
            </x-slot:sectionText>
            <x-slot:buttonText>
                Join the Conversation
            </x-slot:buttonText>
        </x-layout.section-image-text>
    </x-layout.section>
</x-catho-quiz>
