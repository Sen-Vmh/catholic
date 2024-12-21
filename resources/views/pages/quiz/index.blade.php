<x-catho-quiz>
    <x-layout.section-hero hero-bg="/images/quiz/index-hero.jpg">
        <x-slot:heroTitle>Catho Quizzes</x-slot:heroTitle>
        <x-slot:heroDescription>Enjoy our many custom and community quizzes!</x-slot:heroDescription>
        <x-slot:buttonText>Start Learning!</x-slot:buttonText>
    </x-layout.section-hero>

    <x-layout.section class="bg-secondary/75">
        <x-layout.section-text-image src="images/study.jpg" :button="true">
            <x-slot:sectionTitle>
                <div class="items-center">
                    Catho Quizzes<span class="text-accent">.</span>
                </div>
            </x-slot:sectionTitle>
            <x-slot:sectionText>
                CathoQuiz is your comprehensive platform for exploring and understanding the Catholic
                faith. Whether you're beginning your journey or deepening your knowledge, our structured learning paths
                and interactive quizzes will guide you through the rich traditions of the Catholic Church.
            </x-slot:sectionText>
        </x-layout.section-text-image>
    </x-layout.section>

    <x-layout.section class="bg-secondary">
        <div>
            <h2 class="text-center font-bold pb-12 text-5xl text-primary brightness-[80%]">Explore our quizzes<span
                    class="text-accent">!</span>
            </h2>
            <hr>
            <div class="grid-cols-4 grid gap-4">
                <x-custom.img-card src="images/not_found.png"></x-custom.img-card>
                <x-custom.img-card src="images/not_found.png"></x-custom.img-card>
                <x-custom.img-card src="images/not_found.png"></x-custom.img-card>
                <x-custom.img-card src="images/not_found.png"></x-custom.img-card>
                <x-custom.img-card src="images/not_found.png"></x-custom.img-card>
                <x-custom.img-card src="images/not_found.png"></x-custom.img-card>
                <x-custom.img-card src="images/not_found.png"></x-custom.img-card>
                <x-custom.img-card src="images/not_found.png"></x-custom.img-card>
            </div>

        </div>
    </x-layout.section>
    <x-layout.section class="bg-secondary/75">
        <x-layout.section-image-text src="images/not_found.png" :button="true"></x-layout.section-image-text>
    </x-layout.section>
</x-catho-quiz>
